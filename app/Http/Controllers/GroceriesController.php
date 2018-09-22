<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Grocery;
use App\GroceryItem;

class GroceriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user)
    {
        $showRecipe = Grocery::where('user_id',$user)->get();
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
            $this->validate($requeust, [
                'name' => 'required',
                'category' => 'required',
                'recipe' => 'required'
            ]);

            $findGrocery = Grocery::where('name',$request->input('name'))->first();

            if($findGrocery->isEmpty()) {
                $grocery = Auth::user()->groceries()->create($request->all());
            }

            $groceryItem = new Grocery;
            $groceryItem->name = $request->input('recipe');
            $groceryItem->grocery()->associate( $findGrocery->isEmpty() ? $grocery->id : $findGrocery->id );
            $groceryItem->save();

            return response('Created', 201)->header('Content-Type', 'text/plain');
    }

    /**
     * Toggle Recipe to check or unchecked for grocery list
     *
     * @param Request $request
     * @param GroceryItem $groceryItem
     * @return \Illuminate\Http\Response
     */
    public function toggleRecipe(Request $request, GroceryItem $groceryItem)
    {
            $groceryItem->isChecked = !$groceryItem->isChecked;
            $groceryItem->save();
            return response('Accepted', 202 )->header('Content-Type', 'text/plain');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grocery $grocery)
    {
        try {

            $grocery->delete();
            return response('Accepted', 202 )->header('Content-Type', 'text/plain');

        } catch(\Exception $e) {

            return response('Connection Failure', 420)->header('Content-Type', 'application/json');

        }
    }

    public function sweep($user)
    {
        try {

            $sweepGroceries = Grocery::where('user_id',$user)->delete();
            return response('Accepted', 202 )->header('Content-Type', 'application/json');

        } catch (\Exception $e) {

            return response('Connection Failure', 420)->header('Content-Type', 'application/json');

        }
    }

}
