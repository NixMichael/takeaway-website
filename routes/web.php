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
    return view('pages.about');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/reservation', function () {
    return view('pages.reservations');
});

Route::get('/collection', function () {
    return view('pages.collection');
});