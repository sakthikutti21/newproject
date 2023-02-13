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
Route::post('create','App\Http\Controllers\UserController@create');
Route::post('update','App\Http\Controllers\UserController@update');
Route::get('list','App\Http\Controllers\UserController@list');
Route::get('delete/{id}','App\Http\Controllers\UserController@delete');
Route::get('edit/{id}','App\Http\Controllers\UserController@edit');