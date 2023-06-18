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
        Schema::create('paket_grooming', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_grooming');
            $table->integer('harga');
            $table->text('deskripsi_penanganan');
            $table->enum('hewan',['anjingBesar','anjingKecil','kucing','both']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_grooming');
    }
};
