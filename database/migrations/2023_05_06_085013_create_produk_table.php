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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_kategori_id');
            $table->foreign('produk_kategori_id')->references('id')->on('produk_kategori');

            $table->unsignedBigInteger('produk_brand_id');
            $table->foreign('produk_brand_id')->references('id')->on('produk_brand');

            $table->unsignedBigInteger('kategori_hewan_id');
            $table->foreign('kategori_hewan_id')->references('id')->on('kategori_hewan');

            $table->string('nama_produk');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->string('img');
            $table->integer('stok')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
