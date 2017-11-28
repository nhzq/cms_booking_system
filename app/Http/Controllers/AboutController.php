<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index')->with('about', About::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'vision' => 'required',
            'image_1' => 'required|image|max:5000',
            'mission' => 'required',
            'image_2' => 'required|image|max:5000',
            'body' => 'required'
        ]);

        $image_1 = $request->image_1;
        $image_name = time() . $image_1->getClientOriginalName();
        $image_1->move('img/aboutImage', $image_name);

        $image_2 = $request->image_2;
        $image_name_2 = time() . $image_2->getClientOriginalName();
        $image_2->move('img/aboutImage', $image_name_2);

        $about = About::create([
            'vision' => $request->vision,
            'image_1' => 'img/aboutImage/' . $image_name,
            'image_2' => 'img/aboutImage/' . $image_name_2,
            'mission' => $request->mission,
            'body' => $request->body
        ]);

        Session::flash('success', "You have successfully saved the details");

        return redirect()->route('about.index');
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
        $about = About::find($id);

        return view('admin.about.edit')->with('about', $about);
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
            'vision' => 'required',
            'image_1' => 'image|max:5000',
            'mission' => 'required',
            'image_2' => 'image|max:5000',
            'body' => 'required'
        ]);

        $about = About::find($id);

        if($request->hasFile('image_1')) {

            //Get item
            $image_1 = $request->image_1;

            //Give name to the item
            $image_name = time() . $image_1->getClientOriginalName();

            //Move to the item to specified folder
            $image_1->move('img/aboutImage', $image_name);

            //Get the item with new name
            $about->image_1 = 'img/aboutImage/' . $image_name;
        }

        if($request->hasFile('image_2')) {

            //Get item
            $image_2 = $request->image_2;

            //Give name to the item
            $image_name_2 = time() . $image_2->getClientOriginalName();

            //Move to the item to specified folder
            $image_2->move('img/aboutImage', $image_name_2);

            //Get the item with new name
            $about->image_2 = 'img/aboutImage/' . $image_name_2;
        }

        $about->vision = $request->vision;
        $about->mission = $request->mission;
        $about->body = $request->body;
        $about->save();

        Session::flash('success', "Details have been successfully updated");

        return redirect()->route('about.index');
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
