<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Baby;
use App\Models\Prescription;
use App\Models\VaccinationHistory;
use App\Models\VaccinationSchedule;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            BabySeeder::class,
            PrescriptionSeeder::class,
            VaccinationHistoriesSeeder::class,
            VaccinationScheduleSeeder::class,
        ]);
    }
}
