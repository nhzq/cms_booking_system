<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $homepage = Homepage::create([
            'company_name' => $request->company_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'header_image' => $request->header_image,
            'service_1' => $request->service_1,
            'service_2' => $request->service_2,
            'service_3' => $request->service_3,
            'service_4' => $request->service_4,
            'headline' => $request->headline,
            'headline_brief' => $request->headline_brief,
            'services_brief' => $request->services_brief,
        ]);

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
        //
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
        //
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
