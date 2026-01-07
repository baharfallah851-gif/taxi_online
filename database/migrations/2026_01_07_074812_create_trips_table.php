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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->nullable();
            $table->foreignId('driver_id')->constrained()->nullable();
            $table->foreignId('car_id')->constrained()->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->time('start_at')->nullable();
            $table->time('end_at')->nullable();
            $table->tinyInteger('payment_method')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
