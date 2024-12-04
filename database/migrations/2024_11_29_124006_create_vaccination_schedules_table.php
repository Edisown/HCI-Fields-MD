<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationSchedulesTable extends Migration
{
    public function up(): void
    {
        Schema::create('vaccination_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('vaccination_schedule_name');
            $table->date('vaccination_schedule_date');
            $table->foreignId('baby_id')->constrained()->onDelete('cascade'); 
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('vaccination_schedules');
    }
}
