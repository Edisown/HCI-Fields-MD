<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function settings()
    {
        return view('profile.settings');
    }
}
