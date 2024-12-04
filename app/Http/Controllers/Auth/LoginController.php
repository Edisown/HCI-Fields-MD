<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            // 'email' => 'required|email',
            'id_number' => 'required|string',
            'password' => 'required|string',
        ]);

        // attempt to login the user using the id number
        $credentials = $request->only('id_number', 'password');

        if(Auth::attempt($credentials)) {
            // authentication passed, redirect baack with input
            return redirect()->intended('dashboard'); // meaning if the user is authenticated then the next route is the dashboard view
        }

        // authentication failed, redirect back with input
        return back()->withErrors([
            // 'email' => 'The provided credentials do not match our records.',
            'id_number' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login'); // redirect to the login page
    }
}

