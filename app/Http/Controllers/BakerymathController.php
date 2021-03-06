<?php

namespace App\Http\Controllers;

use App\Bakerymath;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BakerymathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // should pass user api token parameter
        $showBakerymath = Bakerymath::where('user_id', Auth::user()->id)->get();
        return $showBakerymath;
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
        $this->validate($request,[
            'ingredient' => 'min:3|max:15|required|unique:bakerymaths,ingredient,NULL,id,user_id,'.Auth::user()->id,
            'quantity' => 'required|numeric',
            // not present on table * for checking only if flour is created in table
            'flour' => 'required',
        ],[
            'flour.required' => 'Please add "flour" ingredient first!'
        ]);

        $bakerymath = new Bakerymath;
        $bakerymath->fill($request->all());
        $bakerymath->ingredient = $request->input('ingredient');
        $bakerymath->quantity = $request->input('quantity');
        $bakerymath->user_id = Auth::user()->id;
        // this should check for user api token
        // $bakerymath->user()->associate($user);
        $bakerymath->save();

        return $bakerymath;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bakerymath  $bakerymath
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bakerymath  $bakerymath
     * @return \Illuminate\Http\Response
     */
    public function edit(Bakerymath $bakerymath)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bakerymath  $bakerymath
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bakerymath $bakerymath)
    {
        $this->validate($request,[
            'ingredient' => 'required|unique:bakerymaths,ingredient,NULL,id,user_id,'.Auth::user()->id,
            'quantity' => 'numeric|min:0.1',
            // not present on table * for checking only if flour is created in table
            'flour' => 'required',
        ],[
             'flour.required' => "The 'flour' should not be modified"
        ]);

        $bakerymath->ingredient = $request->input('ingredient');
        $bakerymath->quantity = $request->input('quantity');
        $bakerymath->save();

        return response('Accepted', 202 )->header('Content-Type', 'application/json');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bakerymath  $bakerymath
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bakerymath $bakerymath)
    {
        try {

            $bakerymath->delete();
            return response('Accepted', 202 )->header('Content-Type', 'application/json');

        } catch (\Exception $e) {

            return response('Connection Failure', 420)->header('Content-Type', 'application/json');

        }
    }

    public function sweep()
    {
        $sweepBakerymath = Bakerymath::where('user_id',Auth::user()->id)->delete();
        return response('Accepted', 202 )->header('Content-Type', 'application/json');
    }
}
