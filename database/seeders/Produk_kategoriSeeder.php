<?php

namespace Database\Seeders;

use App\Models\Produk_kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produk_kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk_kategori::create([
            'nama_kategori' => 'Makanan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk_kategori::create([
            'nama_kategori' => 'Vitamin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk_kategori::create([
            'nama_kategori' => 'Aksesoris',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk_kategori::create([
            'nama_kategori' => 'Lainnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
