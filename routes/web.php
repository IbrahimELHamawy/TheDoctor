<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ebby',function(){
    return "HI";
});

Route::get('login',[LoginController::class,'view']);
Route::post('login',[LoginController::class,'login']);


Route::get('signup',[SignUpController::class,'view']);
Route::post('signup',[SignUpController::class,'signup']);

Route::get('/',[HomeController::class,"view"]);
