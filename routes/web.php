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

// Route::get('/', function () {
//     return view('/admin/index');
// });

// Route::GET('/get-all-form', 'App\Http\Controllers\FormsController@getAllForms');
// Route::get('/admin/formulir', function () {
//     return view('/admin/formulir');
// });
Route::get('/', 'App\Http\Controllers\FormsController@index');
Route::POST('/', 'App\Http\Controllers\FormsController@store');
