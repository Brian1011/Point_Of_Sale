<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    //show all users
    public function show(){
        $users = User::all();
        return view('users',['users'=>$users]);
    }

    public function addUser(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|regex:/(07)[0-9]{8}/'
        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->password = bcrypt(request('password'));
        $user->category = request('user_category');
        $user->save();

        return back()->with('message','New User has been Saved Successfully');

    }
}
