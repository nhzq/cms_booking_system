<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;

        $users = User::where('mode', 'on')->get();

        return view('admin.superadmin.user.index')
            ->with('users', $users)
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::skip(1)->take(2)->get();

        return view('admin.superadmin.user.create')->with('roles', $roles);
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
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'mode' => 'on',
            'password' => bcrypt('password')
        ]);

        //Assign role
        $role = Role::where('name', $request->name)->first();
        $user->roles()->attach($role);

        return redirect()->route('superadmin.user.index');
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
        $user = User::find($id);
        $roles = Role::skip(1)->take(2)->get();

        foreach($user->roles as $role) {
            $role_id = $role->id;
        }

        return view('admin.superadmin.user.edit')
            ->with('roles', $roles)
            ->with('role_id', $role_id)
            ->with('user', $user);
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
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::find($id);

        if($request->email !== $user->email) {
            $this->validate($request, ['email' => 'unique:users']);
        }

        //assign role
        $role = Role::where('name', $request->name)->first();
        $user_role = Role::where('name', $user->name)->first();
        $user->roles()->detach($user_role);
        $user->roles()->attach($role);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('superadmin.user.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('success', "User has been deleted");

        return redirect()->route('superadmin.user.index');
    }
}
