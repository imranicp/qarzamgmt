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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addagent',function (){
    return view('dataentry');
});

Route::post('/addagent','VendorController@addagent');

Route::get('/showagents','VendorController@showagents');

Route::get('/sendmoney','VendorController@sendmoney');
Route::post('/sendmoney','VendorController@sendmoney');

Route::get('/receivemoney','VendorController@receivemoney');
Route::post('/receivemoney','VendorController@receivemoney');

Route::get('/agent',function (){
   return view('agent');
});