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
    return 'authenticated';
});


// oauth passport route
Route::get('/passports','PassportController@index')->name('passports');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


// Route::group(['middleware' => 'auth'], function () {

//     Route::resource('categories','CategoriesController', ['except' => [
//         'show'
//     ]]);
//     Route::resource('recipes','RecipesController');

//     Route::get('recipes','RecipesController@index');
//     Route::get('recipes/create','RecipesController@create');
//     Route::post('recipes','RecipesController@store');
//     Route::post('videos/store','VideosController@store');

// });
