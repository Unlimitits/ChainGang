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


//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//
//Route::get('/', 'HomeController@index')->name('home');

Route::resource('fiets', 'FietsController');

Route::resource('review', 'ReviewController');

Route::get('/categoriepagina', 'FietsController@index')->name('categoriepagina');

Route::get('/detailpagina', function (){
    return view('detailpagina');
});

Route::get('/contact', function (){
    return view('/contactpagina');
})->name('contact');

Route::get('/winkelwagen', function (){
    return view('winkelwagen');
})->name('winkelwagen');

Route::get('/profiel', function (){
    return view('profiel');
})->name('profiel');
