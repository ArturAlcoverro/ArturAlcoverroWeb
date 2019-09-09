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
// Route::get('donants/', function($locale){
//     Session::put('locale', $locale);
//     //$request->session()->put('locale', $locale);
//     return redirect()->back();
// });

Route::get('/locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('index');
});

Route::get('/cleanotes/locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/cleanotes', function () {
    return view('cleanotes');
});

Route::get('/riddle/locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/riddle', function () {
    return view('riddle');
});

Route::get('/barenys/locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/barenys', function () {
    return view('barenys');
});

Route::get('/artio/locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/artio', function () {
    return view('artio');
});

Route::get('/about/locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/about', function () {
    return view('about');
});