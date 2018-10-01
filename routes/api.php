<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register','API\AuthController@register');
Route::post('login','API\AuthController@login');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route API setup for Mobile Client
Route::group(['middleware' => 'auth:api'], function() {

    Route::post('get-details','API\AuthController@getDetails');

    // Featured Recipes
    Route::get('featuredRecipes','API\AmigoPanaderoController@featured');

    // Categories
    Route::get('categories','API\AmigoPanaderoController@categories');

    //Feed recipes
    Route::get('recipesFeed','API\AmigoPanaderoController@recipesFeed');

    //Video Recipe
    Route::get('recipe/{recipe}','API\AmigoPanaderoController@recipeVideo');

    // Recipes under categories
    Route::get('recipe/category/{category}','API\AmigoPanaderoController@categoryRecipes');

    //Recipe for search
    Route::get('recipes/search','API\AmigoPanaderoController@recipeSearch');

    // Route API setup for groceries
    Route::get('fetchGroceries','GroceriesController@fetchGroceries');
    Route::get('fetchGroceryItem/{grocery}','GroceriesController@fetchGroceryItem');
    Route::post('groceries','GroceriesController@store');
    Route::get('toggleIngredient/{groceryItem}','GroceriesController@toggleIngredient');
    Route::delete('removeGroceryItem/{groceryId}/{groceryIndex}','GroceriesController@removeGroceryItem');
    Route::delete('groceries/destroy/{groceryId}','GroceriesController@destroy');
    Route::delete('sweep/groceries','GroceriesController@sweep');

    //Route API setup for bakerymaths
    Route::get('bakerymaths','BakerymathController@index');
    Route::post('bakerymaths','BakerymathController@store');
    Route::post('bakerymaths/{bakerymath}','BakerymathController@update');
    Route::delete('bakerymaths/{bakerymath}','BakerymathController@destroy');
    Route::delete('sweep/bakerymaths','BakerymathController@sweep');

    //Route for About products
    Route::get('/getCompanyProduct','AboutsController@getCompanyProduct');

    //products
    Route::post('products','API\AmigoPanaderoController@products');

    // about Company
    Route::post('aboutCompany','API\AmigoPanaderoController@aboutCompany');

});
