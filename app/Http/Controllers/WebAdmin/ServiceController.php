<?php

namespace App\Http\Controllers\WebAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('admin.webadmin.service.index')->with('service', Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.webadmin.service.create');
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
        $intro_image->move('img/serviceImage', $image_name);

        $body_image = $request->body_image;
        $image_name_body = time() . $body_image->getClientOriginalName();
        $body_image->move('img/serviceImage', $image_name_body);

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

        return view('admin.webadmin.service.edit')->with('service', $service);
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
            $service->intro_image = 'img/serviceImage/' . $image_name;
        }

        if($request->hasFile('body_image')) {

            //Get item
            $body_image = $request->body_image;

            //Give name to the item
            $image_name_body = time() . $body_image->getClientOriginalName();

            //Move to the item to specified folder
            $body_image->move('img/serviceImage', $image_name_body);

            //Get the item with new name
            $service->body_image = 'img/serviceImage/' . $image_name_body;
        }
        

        $service->intro = $request->intro;
        $service->body = $request->body;
        $service->save();

        Session::flash('success', "Details have been successfully updated");

        return redirect()->route('webadmin.service.index');
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
