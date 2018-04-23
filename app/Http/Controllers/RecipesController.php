<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Recipe;
use App\Video;
use App\Category;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('id','desc')->get();
        return view('recipes.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','name');
        return view('recipes.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'featured'  => 'required',
                'title' => 'required|min:3',
                'category_list' => 'required'
            ]);

            $getVideo = Video::select('id')
                    ->where('user_id',Auth::user()->id)
                    ->orderBy('id','desc')
                    ->first();

            $recipe = new Recipe;
            $recipe->user()->associate(Auth::user()->id);
            $recipe->title = $request->input('title');            
            if($request->hasFile('featured')){
                $recipe->featured = $request->file('featured')->store('features','public');
            }
            $recipe->description = $request->input('description');
            $recipe->video()->associate($getVideo);
            $recipe->save();

            $recipe->categories()->attach($request->input('category_list'));

            // display a toast notification
            return 'Added Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
