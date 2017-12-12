<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newspost;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function routeForRole()
    {

        $user = \Auth::user()->name;

        if($user == null) {
            return redirect('/');
        }
        else if($user == 'Super Admin') {
             return redirect()->route('superadmin.index');
        } 
        else if($user == 'Web Admin') {
            return redirect()->route('webadmin.index');
        } 
        else if($user == 'System Admin') {
            return redirect()->route('systemadmin.index');
        }
    }
}
