<?php

namespace Database\Seeders;

use App\Models\Baby;
use Illuminate\Database\Seeder;

class VaccinationHistoriesSeeder extends Seeder
{
    public function run()
    {
        // For Sophia (User 1)
        $baby = Baby::where('name', 'Sophia')->first();
        if ($baby) {
            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Irene Holton',
                'program_name' => 'Influenza (Flu)',
                'status' => 'Done',
                'vaccination_date' => '2023-04-01',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Kim Dokja',
                'program_name' => 'Yellow Fever',
                'status' => 'Rescheduled',
                'vaccination_date' => '2023-05-10',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Airen Parreira',
                'program_name' => 'Diphtheria',
                'status' => 'Cancelled',
                'vaccination_date' => '2023-06-15',
            ]);
        }

        // For Liam (User 1)
        $baby = Baby::where('name', 'Liam')->first();
        if ($baby) {
            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Angela Yu',
                'program_name' => 'Rotavirus',
                'status' => 'Done',
                'vaccination_date' => '2023-09-15',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. John Doe',
                'program_name' => 'Hepatitis B',
                'status' => 'Done',
                'vaccination_date' => '2023-10-10',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Kate Winslet',
                'program_name' => 'Pneumococcal Conjugate',
                'status' => 'Cancelled',
                'vaccination_date' => '2023-11-20',
            ]);
        }

        // For Mia (User 2)
        $baby = Baby::where('name', 'Mia')->first();
        if ($baby) {
            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Mia Lee',
                'program_name' => 'Polio Vaccine',
                'status' => 'Done',
                'vaccination_date' => '2023-05-01',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Sarah Smith',
                'program_name' => 'Hepatitis B',
                'status' => 'Done',
                'vaccination_date' => '2023-06-15',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. William Brown',
                'program_name' => 'Diphtheria',
                'status' => 'Rescheduled',
                'vaccination_date' => '2023-07-20',
            ]);
        }

        // For Noah (User 2)
        $baby = Baby::where('name', 'Noah')->first();
        if ($baby) {
            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Emily White',
                'program_name' => 'Rotavirus',
                'status' => 'Done',
                'vaccination_date' => '2023-08-01',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. James Wilson',
                'program_name' => 'Hepatitis A',
                'status' => 'Done',
                'vaccination_date' => '2023-09-15',
            ]);

            $baby->vaccinationHistories()->create([
                'pediatrician_name' => 'Dr. Jennifer Green',
                'program_name' => 'Pneumococcal Conjugate',
                'status' => 'Rescheduled',
                'vaccination_date' => '2023-10-25',
            ]);
        }
    }
}

