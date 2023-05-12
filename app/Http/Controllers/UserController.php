<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRegisteredRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(UserLoggedRequest $request) {
        if (!Auth::attempt([
            'email'=> $request->email,
            'password'=> $request->password,
        ]))  {
            return response([
            'msg'=> 'incorrect username or password'
        ], 401);
        }
    
        $user = Auth::user(); 
        $token = $user->createToken('apiToken')->plainTextToken; 
    
        $res = [
            'user' => $user,
            'token'=> $token
        ];
    
        return response($res, 201);
    }

    public function logout() {
        $user = Auth::user();
        $user->tokens()->delete();

        return [
            'message' => 'user logged out'
        ];
    }
    
    public function store(UserRegisteredRequest $request) 
    { 
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));
        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $user,
            'token'=> $token
        ];

        return response($res, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
