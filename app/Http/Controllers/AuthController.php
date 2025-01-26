<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class AuthController extends Controller
{
    // Register method
    public function register(Request $request){
        // Validate the request
        $fields = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);



        // Create a new user
        $user = User::create($fields);

        // Log the user in
        Auth::login($user);

        // Redirect the user
        return redirect()->route('home');

        // Return a response
        return response()->json(['message' => 'User created successfully'], 201);


    }
}
