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

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/properties','PropertyController@show_all');
Route::get('/detail','PropertyController@detail');

//Route::get('/addproperty', function () {
//    return view('addproperty');
//});



Route::get('/addproperty', function () {
    return view('addproperty');
});


Route::get('/MarketAnalysis', function () {
    return view('partials.MarketAnalysis');
});


Route::get('/MarketDetails', function () {
    return view('partials.MarketDetails');
});


Route::post('/submit', 'PropertyController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
