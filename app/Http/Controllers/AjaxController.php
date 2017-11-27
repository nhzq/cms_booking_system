<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Category;
use App\Subcategory;
use Session;

class AjaxController extends Controller
{
    public function subcat(Request $request)
    {
    	$data = Subcategory::select('name', 'id')->where('category_id', $request->id)->get();

    	return response()->json($data);
    }
}
