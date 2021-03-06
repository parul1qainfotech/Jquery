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

Route::get('/', function () 
{
    return view('welcome');
});

Route::view('/todo','todo');
Route::view('/jquery','jquery1');
Route::view('/multi','mult');
Route::get('/add','todo@data');
Route::post('/delete','todo@delete1');
Route::post('/update','todo@update');
