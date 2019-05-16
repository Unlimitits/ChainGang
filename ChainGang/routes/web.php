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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categoriepagina', function () {
    return view('categoriepagina');
});

Route::get('/detailpagina', function (){
    return view('detailpagina');
});

Route::get('/profiel', function (){
    return view('profiel');
})->name('profiel');
