<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function view(){
        return view('signup');
    }

    public function signup(Request $request){
        $request->validate([
            'name'=>"required|min:8",
            'email'=>"required|email|unique:users,email",
            'password'=>"required|string|min:6",
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success','Your account has been created!');
    }
}
