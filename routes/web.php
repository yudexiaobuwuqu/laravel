<?php

use Illuminate\Support\Facades\Route;

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
Route::get('laravel-version', function(){
    $laravel = app();
    return "Your Laravel Framework version is ".$laravel::VERSION;
});


Route::get('hello','HelloController@index');
Route::redirect('/here', '/hello',301);

Route::view('/welcome/{name}','welcome',['name' => 'Taylor']);

Route::get('user/{id}', 'ShowProfile');
