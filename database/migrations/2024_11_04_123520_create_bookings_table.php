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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barbershop_id'); // Foreign Key 
            $table->unsignedBigInteger('service_id'); // Foreign Key 
            $table->unsignedBigInteger('user_id'); // Foreign Key 
            $table->timestamp('date'); 
            $table->timestamps(); 
            $table->foreign('barbershop_id')->references('id')->on('barbershops')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
