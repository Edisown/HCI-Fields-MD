<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('baby_id')->constrained()->onDelete('cascade');
            $table->string('medical_drug');
            $table->string('purpose');
            $table->text('instructions');
            $table->string('duration');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
