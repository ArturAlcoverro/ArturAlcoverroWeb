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
    return view('index');
});

Route::get('/cleanotes', function () {
    return view('cleanotes');
});

Route::get('/riddle', function () {
    return view('riddle');
});

Route::get('/barenys', function () {
    return view('barenys');
});