<?php

namespace App\Http\Controllers\SystemAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        return view('admin.systemadmin.training.index')
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

        return view('admin.systemadmin.training.create')
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
            'start_date' => 'required',
            'end_date' => 'required',
            'location_id' => 'required'
        ]);

        $training = Training::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'start_date' => Carbon::parse($request->start_date),
            'end_date' => Carbon::parse($request->end_date),
            'location_id' => $request->location_id
        ]);

        // $training = new Training();
        // $training->category_id = $request->category_id;
        // $training->subcategory_id = $request->subcategory_id;
        // $training->start_date = Carbon::parse($request->start_date);
        // $training->end_date = Carbon::parse($request->end_date);
        // $training->location_id = $request->location_id;
        // $training->category_slug = str_slug($training->category->name);
        // $training->sub_slug = str_slug($training->subcategory->name);
        // $training->save();


        Session::flash('success', "The training has been successfully saved");

        return redirect()->route('systemadmin.training.index');

        

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
        $training = Training::find($id);

        return view('admin.systemadmin.training.edit')
            ->with('training', $training)
            ->with('locations', Location::all())
            ->with('cats', Category::all());
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
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location_id' => 'required'
        ]);

        $training = Training::find($id);
        $training->category_id = $request->category_id;
        $training->subcategory_id = $request->subcategory_id;
        $training->start_date = Carbon::parse($request->start_date);
        $training->end_date = Carbon::parse($request->end_date);
        $training->location_id = $request->location_id;
        $training->save();

        return redirect()->route('systemadmin.training.index');
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
