<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
//Default route
Route::get('/', function () {
    return view('welcome');
})->name('hm');  //Name route;

//Basic routing
Route::get('/about-rt',function(){
    return view ('about');
})->name('a');  //Name route;

Route::get('/skill-rt',function(){
    return view ('skill');
})->name('s');  //Name route

Route::get('/edu-rt',function(){
    return view ('education');
})->name('ed');  //Name route

Route::get("/con-rt","App\Http\Controllers\TestController@displayContactPage");

//use App\Http\Controllers\TestController at the begining of this page;
Route::get("/pf-rt",[TestController::class, "displayPortfolioPage"]);

//False routing
Route::get("/desk",[ 
    "uses"=>"App\Http\Controllers\TestController@displayOrderPage",
    //desk is the false route name. It will display in the address bar
    //ord-rt is the actual route name. it will not display in the address bar
    //but it (i.e ord-rt) must be used to hyperlink, href="{{route('ord-rt')}}"
    "as"=>"ord-rt"
]);

