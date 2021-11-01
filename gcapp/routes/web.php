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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UserController@index')->name('usuarios');

Route::get('/desarrollo', 'DesarrolloController@index')->name('desarrollo')->middleware(['rol:1']);

Route::get('/ventas', 'VentasController@index')->name('ventas')->middleware(['rol:2,3']);

Route::get('/direccion', 'DireccionController@index')->name('direccion')->middleware(['rol:3,4']);


