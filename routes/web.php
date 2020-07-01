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



Route::group(['as'=>'Home.'], function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('materi', 'HomeController@materi')->name('materi');
});

Route::group(['prefix'=> 'login', 'as'=>'Login.'], function(){
    Route::get('login', 'LoginController@login')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    
});

