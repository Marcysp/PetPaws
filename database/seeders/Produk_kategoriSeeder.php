<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produk_kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i <= 5 ; $i++) {
            produk_kategori::create([
                'nama_kategori'=>Str::random(30)
            ]);
        }
    }
}
