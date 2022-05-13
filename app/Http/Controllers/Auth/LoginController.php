<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view(){
        return view('login');
    }

    public function login(Request $request){
        //Function for logging in the user
        if(Auth::attempt($request->only('email','password'))){
            return 'Logged IN';
        }else{
            //If incorrect email or password return to the login page with session message
            return redirect()->back()->with('error','Incorrect email or password');
        }
    }
}
