<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id')->unsigned()->index()->nullable();
            $table->foreign('patient_id')->references('Patient_id')->on('patients')->onDelete('cascade');

            $table->bigInteger('doctor_id')->unsigned()->index()->nullable();
            $table->foreign('doctor_id')->references('Doctor_id')->on('doctors')->onDelete('cascade');

            $table->integer('waiting_time');
            $table->integer('service_time');
            $table->integer('Fees');
            $table->longText('diagnosis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
