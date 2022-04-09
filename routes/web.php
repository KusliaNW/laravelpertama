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

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/coba/{no}', function ($no) {
    return 'Coba ke- '. $no;
});

Route::get('/test', 'App\Http\Controllers\CobaController@index');
Route::get('/test/{Ke}','App\Http\Controllers\CobaController@urutan');
