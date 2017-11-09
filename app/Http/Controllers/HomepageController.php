<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use Session;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.homepage.index')->with('homepage', Homepage::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homepage.create');
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
            'company_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'header_image' => 'required|image',
            'service_1' => 'required',
            'service_2' => 'required',
            'service_3' => 'required',
            'service_4' => 'required',
            'headline' => 'required',
            'headline_brief' => 'required',
            'services_brief' => 'required'
        ]);

        $header_image = $request->header_image;
        $image_name = time() . $header_image->getClientOriginalName();
        $header_image->move('img/homeImage', $image_name);

        $homepage = Homepage::create([
            'company_name' => $request->company_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'header_image' => 'img/homeImage/' . $image_name,
            'service_1' => $request->service_1,
            'service_2' => $request->service_2,
            'service_3' => $request->service_3,
            'service_4' => $request->service_4,
            'headline' => $request->headline,
            'headline_brief' => $request->headline_brief,
            'services_brief' => $request->services_brief,
        ]);

        Session::flash("success", "You have successfully saved the details");

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
        $homepage = Homepage::find($id);

        return view('admin.homepage.edit')->with('homepage', $homepage);
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
        $homepage = Homepage::find($id);

        $this->validate($request, [
            'company_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'header_image' => 'required|image',
            'service_1' => 'required',
            'service_2' => 'required',
            'service_3' => 'required',
            'service_4' => 'required',
            'headline' => 'required',
            'headline_brief' => 'required',
            'services_brief' => 'required'
        ]);

        if($request->hasFile('header_image')) {

            //Get item
            $header_image = $request->header_image;

            //Give name to the item
            $image_name = time() . $header_image->getClientOriginalName();

            //Move to the item to specified folder
            $header_image->move('img/homeImage', $image_name);

            //Get the item with new name
            $homepage->header_image = $image_name;
        }

        $homepage->company_name = $request->company_name;
        $homepage->phone = $request->phone;
        $homepage->email = $request->email;
        $homepage->service_1 = $request->service_1;
        $homepage->service_2 = $request->service_2;
        $homepage->service_3 = $request->service_3;
        $homepage->service_4 = $request->service_4;
        $homepage->headline = $request->headline;
        $homepage->headline_brief = $request->headline_brief;
        $homepage->services_brief = $request->services_brief;
        $homepage->save();
        

        Session::flash('success', "Details have been successfully updated");

        return redirect()->route('homepage.index');
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
