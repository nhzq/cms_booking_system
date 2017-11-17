<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.index')->with('service', Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();

        if($service->count() > 0) {
            Session::flash('info', "You already have a post. Please edit and update the post instead of creating a new post");

            return redirect()->route('service.index');
        }
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'intro' => 'required',
            'intro_image' => 'required|image|max:5000',
            'body' => 'required',
            'body_image' => 'required|image|max:5000',
        ]);

        $intro_image = $request->intro_image;
        $image_name = time() . $intro_image->getClientOriginalName();
        $intro_image->move('img/aboutImage', $image_name);

        $body_image = $request->body_image;
        $image_name_body = time() . $body_image->getClientOriginalName();
        $body_image->move('img/aboutImage', $image_name_body);

        $service = Service::create([
            'intro' => $request->intro,
            'intro_image' => 'img/serviceImage/' . $image_name,
            'body_image' => 'img/serviceImage/' . $image_name_body,
            'body' => $request->body
        ]);

        Session::flash('success', "You have successfully saved the details");

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        if($service->count() == 0) {
            Session::flash('info', "You do not have any post. Please create a new post first");
            
            return redirect()->route('service.index');
        }

        return view('admin.service.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'intro' => 'required',
            'body' => 'required'
        ]);

        $service = Service::find($id);

        if($request->hasFile('intro_image')) {

            //Get item
            $intro_image = $request->intro_image;

            //Give name to the item
            $image_name = time() . $intro_image->getClientOriginalName();

            //Move to the item to specified folder
            $intro_image->move('img/serviceImage', $image_name);

            //Get the item with new name
            $service->intro_image = $image_name;
        }

        if($request->hasFile('body_image')) {

            //Get item
            $body_image = $request->body_image;

            //Give name to the item
            $image_name_body = time() . $body_image->getClientOriginalName();

            //Move to the item to specified folder
            $body_image->move('img/serviceImage', $image_name_body);

            //Get the item with new name
            $service->body_image = $image_name_body;
        }
        

        $service->intro = $request->intro;
        $service->body = $request->body;
        $service->save();

        Session::flash('success', "Details have been successfully updated");

        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
