<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'email' => 'required | email'
        ]);
        // Get user's email and password from the form data
        $credentials = $request->only('email', 'password');

        // Authenticate user
        if (Auth::attempt($credentials)) {
            // If authentication was successful, redirect to home page
            return redirect()->intended('/');
        }

        // If authentication was not successful, redirect back to login page with error message
        return redirect('/login')->withInput($request->except('password'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}
