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
        Schema::create('detail_grooming', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grooming_id');
            $table->foreign('grooming_id')->references('id')->on('grooming');
            $table->unsignedBigInteger('paket_grooming_id');
            $table->foreign('paket_grooming_id')->references('id')->on('paket_grooming');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_grooming');
    }
};
