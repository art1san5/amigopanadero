<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    

    /**
     * Login API
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {

            $user = Auth::user();
            $success['token'] =  $user->createToken('AmigoPanadero')->accessToken;

            return response()->json(['success' => $success], 200);
        
        } else {

            return response()->json(['error'=>'Unauthorised'], 401);
        
        }
    }

    /**
     * Register API
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'phone_number' => 'required',
            'age' => 'required',
            // 'gender' => 'required'
        ]);

        $user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
            'password' => bcrypt(request('password')),
            'phone_number' => request('phone_number'),
            'age' => request('age'),
            // 'gender' => request('gender')
        ]);
        
        $success['token'] = $user->createToken('AmigoPanadero')->accessToken;
        $success['name'] = $user->name;

        return response()->json(['success'=> $success], 200);
    }

    /**
     *  Test Details API
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function getDetails()
    {
        $user = Auth::user();

        return response()->json(['success' => $user], 200);
    }


}
