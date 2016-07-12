<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('/project', function () {
    return view('home.project');
});

Route::get('/block-g', function () {
    return view('home.blockg');
});

Route::get('/mountain', function () {
    return view('home.mountain');
});

Route::get('/behind-the-creation', function () {
    return view('home.behind-the-creation');
});

Route::get('/construction-updates', function () {
    return view('home.construction-updates');
});

Route::get('/residences', function () {
    return view('home.residences');
});

Route::get('/condominiums', function () {
    return view('home.condominiums');
});

Route::get('/villas', function () {
    return view('home.villas');
});

Route::get('/lodge', function () {
    return view('home.lodge');
});

Route::get('/facilities', function () {
    return view('home.facilities');
});