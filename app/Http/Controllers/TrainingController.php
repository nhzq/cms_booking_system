<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Category;
use App\Location;
use Session;
use Carbon\Carbon;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training = Training::all();
        $i = 1;

        return view('admin.training.index')
            ->with('training', $training)
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        $locations = Location::all();

        return view('admin.training.create')
            ->with('cats', $cats)
            ->with('locations', $locations);
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
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'training_date' => 'required',
            'location_id' => 'required'
        ]);

        $training = Training::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'training_date' => Carbon::parse($request->training_date),
            'location_id' => $request->location_id
        ]);

        Session::flash('success', "The training has been successfully saved");

        return redirect()->route('training.index');


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
