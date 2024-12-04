<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('babies', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); // foreign key for the parent/guardian
            $table->string('name'); // name of baby
            $table->date('date_of_birth'); // date of birth
            $table->enum('gender', ['Male', 'Female', 'Other']); // gender
            $table->decimal('height', 5, 2)->nullable(); // Height in cm
            $table->decimal('weight', 5, 2)->nullable(); // Weight in kg
            $table->text('allergies')->nullable(); 
            $table->string('blood_type', 3)->nullable(); // Blood type (e.g., A+, O-)
            $table->text('diseases')->nullable();
            $table->string('heart_rate')->nullable(); //h eart rate (e.g., "95 bpm")
            $table->decimal('body_temperature', 4, 1)->nullable(); // temperature in °C
            $table->decimal('bmi', 5, 2)->nullable(); // BMI (calculated based on weight and height)
            $table->text('dietary_preferences')->nullable(); // dietary preferences based on age
            $table->text('dietary_recommendations')->nullable(); // dietary recommendations
            $table->string('photo_path')->nullable(); // path to the baby's photo file
            $table->timestamps(); // created at and Updated at timestamps
            
            // foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('babies');
    }
};
