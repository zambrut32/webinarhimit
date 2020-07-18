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

Route::get('/body', function () {
    return view('index/index');
});
Route::get('/', 'InputController@input')->name('input');
Route::post('/tambahdata', 'InputController@tambah')->name('tambahdata');
Route::get('/listsertifikat', 'InputController@list')->name('listsertifikat');


