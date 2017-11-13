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
        $post = About::all();

        if($post->count() > 0) {
            Session::flash('info', "You already have a post. Please edit and update the post instead of creating a new post");
            
            return redirect()->route('about.index');
        }
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
            'mission' => 'required',
            'body' => 'required'
        ]);

        $about = About::create([
            'vision' => $request->vision,
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
            'mission' => 'required',
            'body' => 'required'
        ]);

        $about = About::find($id);

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
