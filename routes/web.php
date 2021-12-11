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
    return view('home');
});

Route::get('/cv1', function () {
    return view('cvdiego');
});

Route::get('/cv2', function () {
    return view('cvdeivis');
});

Route::get('/cv3', function () {
    return view('cvjavier');
});

Route::get('/cv4', function () {
    return view('cvgian');
});

Route::get('/form1', function () {
    return view('form1');
});

Route::get('/form2', function () {
    return view('form2');
});

Route::get('/form3', function () {
    return view('form3');
});

Route::get('/form4', function () {
    return view('form4');
});
