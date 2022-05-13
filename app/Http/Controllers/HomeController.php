<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view(){
        $categories = Category::all();
        return view('index',['categories'=>$categories]);
    }
}
