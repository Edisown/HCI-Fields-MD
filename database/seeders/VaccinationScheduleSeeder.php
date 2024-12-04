<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VaccinationSchedule;
use App\Models\Baby;

class VaccinationScheduleSeeder extends Seeder
{
    public function run()
    {
        // For Sophia (User 1)
        $baby = Baby::where('name', 'Sophia')->first();
        if ($baby) {
            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Diphtheria',
                'vaccination_schedule_date' => '2024-05-01',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Polio Vaccine',
                'vaccination_schedule_date' => '2024-06-01',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Influenza (Flu)',
                'vaccination_schedule_date' => '2024-06-01',
                'baby_id' => $baby->id,
            ]);
        }

        // For Liam (User 1)
        $baby = Baby::where('name', 'Liam')->first();
        if ($baby) {
            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'MMR (Measles, Mumps, Rubella)',
                'vaccination_schedule_date' => '2024-01-10',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Chickenpox (Varicella)',
                'vaccination_schedule_date' => '2024-03-20',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Polio Booster',
                'vaccination_schedule_date' => '2024-05-15',
                'baby_id' => $baby->id,
            ]);
        }

        // For Mia (User 2)
        $baby = Baby::where('name', 'Mia')->first();
        if ($baby) {
            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Hepatitis A',
                'vaccination_schedule_date' => '2024-01-15',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Rotavirus',
                'vaccination_schedule_date' => '2024-02-10',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Pneumococcal Conjugate',
                'vaccination_schedule_date' => '2024-04-10',
                'baby_id' => $baby->id,
            ]);
        }

        // For Noah (User 2)
        $baby = Baby::where('name', 'Noah')->first();
        if ($baby) {
            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Hepatitis B',
                'vaccination_schedule_date' => '2024-01-20',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Polio Vaccine',
                'vaccination_schedule_date' => '2024-03-05',
                'baby_id' => $baby->id,
            ]);

            VaccinationSchedule::create([
                'vaccination_schedule_name' => 'Diphtheria',
                'vaccination_schedule_date' => '2024-05-25',
                'baby_id' => $baby->id,
            ]);
        }
    }
}
