<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Recipe;
use App\Category;
use App\Video;
use Carbon\Carbon;
use App\Product;
use App\About;
use DB;

class AmigoPanaderoController extends Controller
{
    

    /**
     * Featured Recipes 
     * 
     * Show latest 5 recipes
     * 
     * @return JSON
     */
    public function featured()
    {
        $featured = Recipe::orderBy('id','DESC')
                        ->with('video','category')
                        ->take(5)
                        ->get();
        
        return $featured;
    }

    /**
     * Show all Categories
     * 
     * @return JSON
     */
    public function categories()
    {
        $categories = Category::all();
        
        return $categories;
    }

    /**
     * Find Recipe under category
     * 
     * @return JSON
     */
    public function categoryRecipes($category)
    {
        $recipes = Recipe::orderBy('id','DESC')
                    ->whereHas('category', function($q) use ($category) {
                        $q->where('id',$category);
                    })
                    ->get();
        
        return $recipes;
    }

    /**
     * Show all recipes after the featured content
     * 
     * @return JSON
     *       
     */
    public function recipesFeed()
    {
        $feed = Recipe::orderBy('id','DESC')
                    ->whereNotIn('id',$this->featured()->pluck('id'))
                    ->take(20)
                    ->get();
        
        return $feed;

    }

    /**
     * Show all products
     * 
     * @return JSON
     */
    public function products()
    {
        $products = Product::orderBy('id','DESC')
                    ->get();

        return $products;
    }

    /**
     * Show about company 
     * 
     * @return JSON
     */
    public function aboutCompany()
    {
        $about = About::all();

        return $about;
    }


}
