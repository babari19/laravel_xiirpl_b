<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login() {
        return view('login');
    }

    function register() {
        return view('register');
    }

    function save(Request $request) {
        // Validate the request data
        $validated = $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required',
            'password' => 'required|min:6'
        ]);
    
        // Hash the password before saving
        $validated['password'] = bcrypt($validated['password']);
    
        // Create the new user
        User::create($validated);
    
        // Redirect with a success message
        return redirect('register')->with('status', 'User registered successfully!');
    }
}
