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

Route::get('/kevin', function () {
    return "Ini Buatan Kevin";
});

Route::get('/riyan', function () {
    return "Ini Buatan Riyan";
});

Route::get('/ridwan', function () {
    return "Ini Buat Ridwan";
});
