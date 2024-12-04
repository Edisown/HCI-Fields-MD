<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('vaccination_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('baby_id')->constrained()->onDelete('cascade'); 
            $table->string('pediatrician_name'); 
            $table->string('program_name'); 
            $table->string('status'); // should be (e.g., "done", "rescheduled", "cancelled")
            $table->date('vaccination_date'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('vaccination_histories');
    }
}
