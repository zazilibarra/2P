<?php

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

Route::get('/', 'HomeController@inicio');

Route::get('/form', function()
{
    return view('form');
});

Route::post('/guarda', 'HomeController@guarda');

Route::get('/detalle/{id}', 'HomeController@detalle');

Route::get('/detallepastel/{id}', 'HomeController@detallePastel');