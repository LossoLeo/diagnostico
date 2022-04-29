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
    return view('Home/homepage');
});

Route::get('/cuidado', function () {
    return view('Results/warning');
});

Route::get('/alerta', function () {
    return view('Results/danger');
});

Route::get('/parabens', function () {
    return view('Results/congratulations');
});

Auth::routes();
