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
        Schema::create('penitipan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('paket_penitipan_id');
            $table->foreign('paket_penitipan_id')->references('id')->on('paket_penitipan');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->string('nama_hewan');
            $table->string('nama_pemilik');
            $table->string('riwayat_penyakit');
            $table->text('alamat');
            $table->string('no_hp');
            $table->enum('hewan',['anjing besar','kucing','anjing kecil'])  ;
            $table->integer('total');
            $table->enum('status',['list','checkout'])->default('list');
            $table->enum('dilayani',['terlayani','proses'])->default('proses');
            $table->enum('paid',['paid','unpaid'])->default('unpaid');
            $table->text('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penitipan');
    }
};
