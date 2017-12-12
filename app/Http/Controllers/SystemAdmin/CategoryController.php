<?php

namespace App\Http\Controllers\SystemAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $i = 1;

        return view('admin.systemadmin.category.index')
            ->with('categories', $categories)
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.systemadmin.category.create_category');
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
            'name' => 'required:unique'
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        Session::flash('success', "Category has been saved");

        return redirect()->route('systemadmin.category.index');
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
        $category = Category::find($id);

        return view('admin.systemadmin.category.edit_category')->with('category', $category);
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
            'name' => 'required'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('systemadmin.category.index');
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

    public function edit_sub($id)
    {
        $subcat = Subcategory::find($id);

        return view('admin.systemadmin.category.edit_subcategory')->with('subcat', $subcat);
    }

    public function update_sub(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $subcat = Subcategory::find($id);
        $subcat->name = $request->name;
        $subcat->save();

        return redirect()->route('systemadmin.category.index');
    }
}
