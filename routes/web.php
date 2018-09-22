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


// user api token should pass to parameter
Route::get('groceries/{user}','GroceriesController@index');
Route::post('groceries','GroceriesController@store');
Route::post('toggleRecipe/{groceryItem}','GroceriesController@toggleRecipe');
// user api token should pass to parameter
Route::delete('groceries/destroy/{user}','GroceriesController@destroy');
Route::delete('groceries/sweep/{user}','GroceriesController@sweep');

//user api token should pass to parameter
Route::get('bakerymaths/{user}','BakerymathController@index');
Route::post('bakerymaths','BakerymathController@store');
Route::post('bakerymaths/{bakerymath}','BakerymathController@update');
Route::delete('bakerymaths/{bakerymath}','BakerymathController@destroy');
// user api token should pass to parameter
Route::delete('bakerymaths/sweep/{user}','BakerymathController@sweep');


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
