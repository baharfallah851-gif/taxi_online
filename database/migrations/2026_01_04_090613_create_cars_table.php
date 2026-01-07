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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id');
            $table->integer('make_id');
            $table->integer('model_id');
            $table->date('manufacture_year')->nullable();
            $table->string('color')->nullable();
            $table->bigInteger('licence_plate')->nullable();
            $table->tinyInteger('car_type')->nullable();
            $table->boolean('technical_inspection')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
