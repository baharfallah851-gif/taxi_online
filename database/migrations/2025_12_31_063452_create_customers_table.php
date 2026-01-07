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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone_number');
            $table->string('email')->nullable();
            $table->string('username');
            $table->string('password');
            $table->tinyInteger('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->unsignedBigInteger('wallet_balance')->default(0);
            $table->unsignedBigInteger('total_trips')->default(0);
            $table->integer('city_id');
            $table->integer('province_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
