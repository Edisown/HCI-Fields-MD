<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class BabySeeder extends Seeder
{
    public function run()
    {
        // Find user with primary id 1
        $user1 = User::find(1);

        // If user1 exists, create babies for them
        if ($user1) {
            // Sophia 1 year old
            $user1->babies()->create([
                'name' => 'Sophia', 
                'date_of_birth' => '2023-10-01', 
                'gender' => 'Female', 
                'height' => 75.5, 
                'weight' => 9.8,
                'allergies' => 'None', 
                'blood_type' => 'A+',
                'diseases' => 'None', 
                'heart_rate' => '120', 
                'body_temperature' => 37.2, 
                'bmi' => 16.5, 
                'dietary_preferences' => 'Breastfeeding', 
                'dietary_recommendations' => 'Ensure proper nutrition and hydration.', 
                'photo_path' => 'Baby1.png', 
            ]);

            // Liam 6 Months
            $user1->babies()->create([
                'name' => 'Liam',
                'date_of_birth' => '2024-05-01', 
                'gender' => 'Male',
                'height' => 66.0, 
                'weight' => 7.5, 
                'allergies' => 'None',
                'blood_type' => 'B+',
                'diseases' => 'None',
                'heart_rate' => '120', 
                'body_temperature' => 37.0, 
                'bmi' => 17.3, 
                'dietary_preferences' => 'Introduction to Solids (if baby shows readiness)',
                'dietary_recommendations' => 'Start with single-grain cereals (e.g., rice or oat cereal mixed with breast milk/formula). Pureed vegetables (carrots, peas) and fruits (bananas, apples). Introduce one new food every 3–5 days to monitor for allergies.',
                'photo_path' => 'Baby1.png',
            ]);
        } else {
            \Log::error("User with ID 1 not found.");
        }

        // Find user with primary id 2
        $user2 = User::find(2);

        // If user2 exists, create babies for them
        if ($user2) {
            // Mia 2 years old
            $user2->babies()->create([
                'name' => 'Mia', 
                'date_of_birth' => '2022-06-15', 
                'gender' => 'Female', 
                'height' => 85.0, 
                'weight' => 12.0,
                'allergies' => 'Peanuts', 
                'blood_type' => 'O-', 
                'diseases' => 'None', 
                'heart_rate' => '110', 
                'body_temperature' => 36.8, 
                'bmi' => 16.5, 
                'dietary_preferences' => 'Vegetarian Diet', 
                'dietary_recommendations' => 'Ensure balanced vegetarian meals, with a focus on protein and iron-rich foods.', 
                'photo_path' => 'Baby1.png', 
            ]);

            // Noah 9 months
            $user2->babies()->create([
                'name' => 'Noah',
                'date_of_birth' => '2023-03-10', 
                'gender' => 'Male',
                'height' => 73.0, 
                'weight' => 9.0, 
                'allergies' => 'None',
                'blood_type' => 'AB+',
                'diseases' => 'None',
                'heart_rate' => '115', 
                'body_temperature' => 37.1, 
                'bmi' => 18.0, 
                'dietary_preferences' => 'Breastfeeding with small portions of pureed foods.',
                'dietary_recommendations' => 'Introduce mashed potatoes, pureed vegetables, and small amounts of fruit as Noah starts to wean.',
                'photo_path' => 'Baby1.png',
            ]);
        } else {
            \Log::error("User with ID 2 not found.");
        }
    }
}
