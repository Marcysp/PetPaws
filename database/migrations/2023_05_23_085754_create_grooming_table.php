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
        Schema::create('grooming', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('tanggal_grooming');
            $table->string('nama_hewan')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->enum('hewan',['anjing','kucing']);
            $table->integer('total')->nullable();
            $table->enum('status',['list','checkout'])->default('list');
            $table->enum('dilayani',['terlayani','proses'])->default('proses');
            $table->enum('paid',['paid','unpaid'])->default('unpaid');
            $table->text('token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grooming');
    }
};
