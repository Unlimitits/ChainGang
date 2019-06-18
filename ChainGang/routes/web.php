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

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::resource('fiets', 'FietsController');

Route::get('/categoriepaginaFrameType/{frametype}', 'FietsController@filterFrameType')->name('filterFrameType');

Route::get('/categoriepaginaPriceMin/{priceMin}', 'FietsController@filterPrice')->name('filterPrice');

Route::get('/categoriepaginaBrand/{brand}', 'FietsController@filterBrand')->name('filterBrand');

Route::get('/detailpagina', 'Fietscontroller@show')->name('detailpagina');

Route::resource('/medewerker', 'MedewerkerController');

Route::resource('/klant', 'KlantController');

Route::resource('/review-beheer', 'ReviewControllerBeheer');

Route::resource('/dashboard', 'DashboardController');

Route::resource('/aanbieding', 'AanbiedingController');

Route::resource('/nieuwsbrief', 'NieuwsbriefController');

Route::resource('/fiets-beheer', 'FietsControllerBeheer');

Route::resource('review', 'ReviewController');

Route::get('/categoriepagina', 'FietsController@index')->name('categoriepagina');

Route::get('/categoriepaginaFrameType', 'FietsController@index')->name('categoriepagina');

Route::get('/categoriepaginaPriceMin', 'FietsController@index')->name('categoriepagina');

Route::get('/categoriepaginaBrand', 'FietsController@index')->name('categoriepagina');

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



// login routes








//Winkelwagen routes

Route::group(['middleware' => ['auth']], function () {
    // Authorized routs

//    Route::get('/winkelwagen', 'CartController@index')->name('winkelwagen');

    Route::get('add-to-winkelwagen/{id}', 'CartController@addToCart');

    Route::patch('update-winkelwagen', 'CartController@update')->name('update-winkelwagen');

    Route::delete('remove-from-winkelwagen', 'CartController@remove')->name('remove-from-winkelwagen');

    Route::get('/checkout', 'CartController@getCheckout')->name('checkout-from-winkelwagen');

    Route::post('/checkout', 'CartController@postCheckout')->name('checkout-from-winkelwagen');
});







