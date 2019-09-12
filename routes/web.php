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
    return view('home');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/why_us', function () {
    return view('why');
});

Route::get('/modules', function () {
    return view('modules');
});

Route::get('/sample_ohcms', function () {
    return view('sample');
});

Route::get('/contact', function () {
    return view('contact');
});
