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

Route::post('login','API\AuthController@login');
Route::post('register','API\AuthController@register');

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:api'], function() {

    Route::post('get-details','API\AuthController@getDetails');

    // Featured Recipes
    // Route::post('featured','API\AmigoPanaderoController@featured');

    // Categories
    // Route::post('categories','API\AmigoPanaderoController@categories');

    // Recipes under categories
    // Route::post('recipe/category/{category}','API\AmigoPanaderoController@categoryRecipes');

    //products
    Route::post('products','API\AmigoPanaderoController@products');

    //Feed recipes
    // Route::post('recipesFeed','API\AmigoPanaderoController@recipesFeed');

    // about Company
    Route::post('aboutCompany','API\AmigoPanaderoController@aboutCompany');

});