<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('backend.userList');
    }
    public function getUserList(){
        $users=User::all();
        return response()->json(['users' => $users], 200);
    }
    public function save_user(Request $request){
        $request->validate([
            'email' => 'required|email|string|max:255|unique:users',
        ]);

        $user=new User();
        $user->role_id=$request['role'];
        $user->first_name=$request['first_name'];
        $user->last_name=$request['last_name'];
        $user->full_name=$request['last_name']." ".$request['first_name'];
        $user->email=$request['email'];
        $user->telephone=$request['phone'];
        $user->date=$request['date'];
        $user->district1=$request['district1'];
        $user->district2=$request['district2'];
        $user->district3=$request['district3'];
        $user->education=$request['education'];
        $user->fields=$request['fields'];
        $user->gender=$request['gender'];
        $user->country=$request['country'];
        $user->confirmed=true;
        $user->activated=true;
        $user->password=bcrypt($request['password']);
        $user->save();

        $role=Role::find($request['role']);
        $user->attachRole($role);
        event(new Registered($user));

        return response()->json(['user' => "ok"], 200);
    }
}
