<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        
        if (auth()->check()) {
        
            $user = auth()->user();

            $babies = Baby::where('user_id', $user->id)->get(); 

            return view('dashboard', compact('babies'));
        }

        return redirect()->route('login');
    }
}
