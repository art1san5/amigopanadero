<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Grocery;
use App\GroceryItem;

class GroceriesController extends Controller
{

    public function fetchGroceries() {

        $groceries = Grocery::where('user_id', Auth::user()->id)
                        ->with('groceryItems')->get();

        return $groceries;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchGroceryItem($grocery)
    {
        $showRecipe = Grocery::where('user_id', Auth::user()->id)
                        ->where('name', $grocery)
                        ->with('groceryItems')->first();

        return $showRecipe;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'name' => 'required',
                'category' => 'required',
                'recipe' => 'required',
                'index' => 'required',
            ]);

            $grocery = Grocery::firstOrCreate([
                'name' => $request->input('name'),
                'user_id' => Auth::user()->id // should be pass in parameter
            ], [
                'category' => $request->input('category'),
            ]);

            $groceryItem = new GroceryItem;
            $groceryItem->recipe = $request->input('recipe');
            $groceryItem->bakers = $request->input('bakers');
            $groceryItem->grams = $request->input('grams');
            $groceryItem->index = $request->input('index');
            $groceryItem->user_id = Auth::user()->id; // should pass real user name on prod
            $groceryItem->grocery()->associate($grocery->id);
            $groceryItem->save();

            return $grocery;

    }

    /**
     * Toggle Recipe to check or unchecked for grocery list
     *
     * @param Request $request
     * @param GroceryItem $groceryItem
     * @return \Illuminate\Http\Response
     */
    public function toggleIngredient(GroceryItem $groceryItem)
    {
            $groceryItem->isChecked = !$groceryItem->isChecked;
            $groceryItem->save();

            return $groceryItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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

    public function removeGroceryItem($groceryId, $groceryIndex)
    {

        $groceryItem = GroceryItem::where('user_id',Auth::user()->id)
        ->where('grocery_id', $groceryId)
        ->where('index', $groceryIndex)
        ->first();

        $groceryItem->delete();

        $findGrocery = Grocery::where('id',$groceryId)->first();
        if($findGrocery->groceryItems()->count() == 0) {
            $this->destroy($groceryId);
        }

        return response('Accepted', 202 )->header('Content-Type', 'application/json');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($groceryId)
    {

        $findGrocery = Grocery::where('id', $groceryId)
                        ->where('user_id', Auth::user()->id)
                        ->with('groceryItems')
                        ->delete();

        return response('Accepted', 202 )->header('Content-Type', 'text/plain');

    }

    public function sweep()
    {
        $sweepGroceries = Grocery::where('user_id', Auth::user()->id)->delete();
        return response('Accepted', 202 )->header('Content-Type', 'application/json');
    }

}
