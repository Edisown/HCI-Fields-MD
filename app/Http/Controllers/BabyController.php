<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baby;
use App\Models\User;

class BabyController extends Controller {

    public function showBabies() {
        $user = auth()->user();

        $babies = $user->babies()->with(['prescriptions', 'vaccinationHistories', 'vaccinationSchedules'])->get();

        return view('dashboard', compact('babies'));
    }

    public function show($babyId) {
        $baby = Baby::with(['prescriptions', 'vaccinationHistories', 'vaccinationSchedules'])->findOrFail($babyId);
        
        return view('babydetails', compact('baby'));
    }
}

