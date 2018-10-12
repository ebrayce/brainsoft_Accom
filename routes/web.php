<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $plans = \App\Plan::all();
    $locations = \App\Location::all();
    return view('welcome',compact('plans','locations'));
});

Auth::routes();
Route::get('/admin',function (){
    return redirect('/admin/member');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'],function (){
    Route::resource('/admin/admin','AdminController');
    Route::resource('/admin/member','MemberController');
    Route::resource('/admin/plan','PlanController');
    Route::resource('/admin/location','LocationController');
});
