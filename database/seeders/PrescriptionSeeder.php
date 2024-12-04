<?php

namespace Database\Seeders;

use App\Models\Baby;
use App\Models\Prescription;
use Illuminate\Database\Seeder;

class PrescriptionSeeder extends Seeder
{
    public function run()
    {
        // For Sophia (User 1)
        $baby = Baby::where('name', 'Sophia')->first();
        if ($baby) {
            $baby->prescriptions()->create([
                'medical_drug' => 'Paracetamol',
                'purpose' => 'Fever Reduction',
                'instructions' => 'Take 5ml every 4-6 hours for 3 days.',
                'duration' => '3 days',
            ]);

            $baby->prescriptions()->create([
                'medical_drug' => 'Amoxicillin',
                'purpose' => 'Antibiotic for infection',
                'instructions' => 'Take 10ml twice daily for 7 days.',
                'duration' => '7 days',
            ]);

            $baby->prescriptions()->create([
                'medical_drug' => 'Salbutamol Inhaler',
                'purpose' => 'Asthma Treatment',
                'instructions' => 'Inhale 2 puffs every 6 hours as needed.',
                'duration' => 'As needed',
            ]);
        }

        // For Liam (User 1)
        $baby = Baby::where('name', 'Liam')->first();
        if ($baby) {
            $baby->prescriptions()->create([
                'medical_drug' => 'Ibuprofen',
                'purpose' => 'Pain Relief',
                'instructions' => '5ml every 8 hours for 5 days.',
                'duration' => '5 days',
            ]);

            $baby->prescriptions()->create([
                'medical_drug' => 'Cetirizine',
                'purpose' => 'Allergy Relief',
                'instructions' => '2.5ml once daily for 10 days.',
                'duration' => '10 days',
            ]);
        }

        // For Mia (User 2)
        $baby = Baby::where('name', 'Mia')->first();
        if ($baby) {
            $baby->prescriptions()->create([
                'medical_drug' => 'Paracetamol',
                'purpose' => 'Pain and Fever Relief',
                'instructions' => '5ml every 6 hours as needed.',
                'duration' => 'As needed',
            ]);

            $baby->prescriptions()->create([
                'medical_drug' => 'Omeprazole',
                'purpose' => 'Gastric Reflux',
                'instructions' => '10mg once daily before breakfast for 7 days.',
                'duration' => '7 days',
            ]);
        }

        // For Noah (User 2)
        $baby = Baby::where('name', 'Noah')->first();
        if ($baby) {
            $baby->prescriptions()->create([
                'medical_drug' => 'Paracetamol',
                'purpose' => 'Pain and Fever Relief',
                'instructions' => '5ml every 6 hours for 3 days.',
                'duration' => '3 days',
            ]);

            $baby->prescriptions()->create([
                'medical_drug' => 'Salbutamol Inhaler',
                'purpose' => 'Asthma Treatment',
                'instructions' => '1 puff every 4 hours as needed.',
                'duration' => 'As needed',
            ]);
        }
    }
}
