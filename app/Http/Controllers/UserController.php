<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('backend.userList');
    }
    public function createUser(){
        return view("backend.addUser");
    }
    public function save_user(Request $request){
        $request->validate([
            'email' => 'required|email|string|max:255|unique:users',
        ]);

        $user=new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->username=$request['email'];
        $user->phone=$request['phone'];
        $user->password=Hash::make($request['password']);
        $user->password_bcp=$request['password'];
        $user->save();
        return redirect()->back()->with('message',"User Saved Successful");
    }
    public function allUsers(){
        $users=User::all();
        return view("backend.allUsers", [
            'users' => $users
        ]);
    }
    public function getAllUsers(){
        if (Auth::check()){
            $users=User::all();
            return response()->json(['users' => $users], 200);
        }else{
            return view('welcome');
        }
    }
}
