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
        // Redirect the user
        return redirect()->route('login');

    }

    // LOGIN USER
    public function login(Request $request){
        //validate login credetials
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);
        // Attempt to log the user in
        if(Auth::attempt($fields, $request->remember)){
            // Redirect the user
            return redirect()->intended('/dashboard');
        }  else {
            return back()->withErrors(['login_failed' => 'The provided credentials do not match our records']);
        }

    }

    // LOGOUT USER
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }





}
