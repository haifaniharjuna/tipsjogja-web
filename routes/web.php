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

Route::get('/barang','App\Http\Controllers\BarangController@index');
Route::post('/barang/create','App\Http\Controllers\BarangController@create');
Route::get('/barang/{id}/edit','App\Http\Controllers\BarangController@edit');
Route::post('/barang/{id}/update','App\Http\Controllers\BarangController@update');
Route::get('/barang/delete','App\Http\Controllers\BarangController@delete');