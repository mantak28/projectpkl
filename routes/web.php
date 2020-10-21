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


Route::resource('/biodata', 'BiodataController');
Route::resource('/pendidikan', 'PendidikanController');
Route::resource('/masapkl', 'MasapklController');
Route::post('/masapkl/filter','MasapklController@filter')->name('masapkl.filter');
Route::resource('/absensi', 'AbsensiController');
Route::get('/masapkl/{id}/edit','MasapklController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
