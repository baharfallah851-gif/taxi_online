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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone_number');
            $table->string('email')->nullable();
            $table->string('username');
            $table->string('password');
            $table->tinyInteger('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->bigInteger('national_code')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->unsignedInteger('total_trips')->default(0);
            $table->unsignedInteger('total_income')->default(0);
            $table->boolean('is_active')->default(false);
            $table->integer('city_id');
            $table->integer('province_id');
            $table->string('image')->nullable();
            $table->bigInteger('license_number')->nullable();
            $table->date('license_expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
