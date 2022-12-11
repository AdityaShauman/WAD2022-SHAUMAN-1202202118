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
    return view('Home-Shauman');
});
Route::get('/Add', function () {
    return view('Add-Shauman');
});
Route::get('/Login', function () {
    return view('Login-Shauman');
});

Route::get('/Profile', function () {
    return view('Profile-Shauman');
});

Route::get('/Register', function () {
    return view('Register-Shauman');
});

Route::get('/Edit', function () {
    return view('Edit-Shauman');
});

Route::get('/Detail', function () {
    return view('Detail-Shauman');
});

Route::get('/ListCar', function () {
    return view('ListCar-Shauman');
});


