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

Route::get('/oauth/gmail', function (){
    return \Dacastro4\LaravelGmail\Facade\LaravelGmail::redirect();
});

Route::get('/oauth/gmail/callback', function (){
    \Dacastro4\LaravelGmail\Facade\LaravelGmail::makeToken();
    return redirect()->to('/');
});

Route::get('/oauth/gmail/logout', function (){
    \Dacastro4\LaravelGmail\Facade\LaravelGmail::logout(); //It returns exception if fails
    return redirect()->to('/');
});
