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
            $table->unsignedBigInteger('barbershop_id'); // Foreign Key 
            $table->string('name'); 
            $table->string('description'); 
            $table->decimal('price', 10, 2); 
            $table->string('image_url'); 
            $table->timestamps(); 
            $table->foreign('barbershop_id')->references('id')->on('barbershops')->onDelete('cascade');
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
