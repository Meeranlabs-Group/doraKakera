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
//Route::get('/profile', function () {
//
//    return view('profile');
//});
Route::get('/profile','ProfileController@profile');
Route::post('/profile','ProfileController@updateprofile');  //profile update
Route::post('/updatepassword','ProfileController@updatepassword');  //profile update

//Route::get('/myproperties', function () {
//
//    return view('myproperties');
//});

Route::get('/myproperties','PropertyController@myproperties');


//Route::get('/', 'PropertyController@mainPage');

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/properties','PropertyController@show_all');
Route::get('/editproperty/{id}/{purpose}/{type}','PropertyController@editproperty');

Route::get('/maps', function () {

    return view('map');

});


Route::get('/viewloader','PropertyController@viewloader');


Route::get('/propertydetail/{id}','PropertyController@propertydetail');




Route::get('/Housesview', function () {

    return View::make('features.house_feature');

});



Route::get('/Flatesview', function () {

    return View::make('features.flat_feature');

});

Route::get('/Upper-Portionsview', function () {

    return View::make('features.portion&farm_feature');

});
Route::get('/Lower-Portions', function () {

    return View::make('features.portion&farm_feature');

});
Route::get('/Farms-Houseview', function () {

    return View::make('features.portion&farm_feature');

});
Route::get('/Residential-Plotsview', function () {

    return View::make('features.plot_feature');

});

Route::get('/Commercial-Plotsview', function () {

    return View::make('features.plot_feature');

});
Route::get('/Agricultural-Landview', function () {

    return View::make('features.land_feature');

});
Route::get('/Industrial-Landview', function () {

    return View::make('features.land_feature');

});
Route::get('/Officesview', function () {

    return View::make('features.office_feature');

});
Route::get('/Shopsview', function () {

    return View::make('features.shop_feature');

});
Route::get('/Warehousesview', function () {

    return View::make('features.warehouse_feature');

});
Route::get('/Factoriesview', function () {

    return View::make('features.factory_feature');

});
Route::get('/Buildingsview', function () {

    return View::make('features.building_feature');

});
Route::get('/Otherview', function () {

    return View::make('features.other_feature');

});



Route::get('/addproperty', function () {
    return view('addproperty');
})->middleware('auth');


Route::get('/MarketAnalysis', function () {
    return view('partials.MarketAnalysis');
});


Route::get('/MarketDetails', function () {
    return view('partials.MarketDetails');
});


Route::post('/submit', 'PropertyController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



?>