<?php

namespace Database\Seeders;

use App\Models\Produk_brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produk_brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk_brand::create([
            'nama_brand' => 'Bold',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Produk_brand::create([
            'nama_brand' => 'Royal Canin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Produk_brand::create([
            'nama_brand' => 'Whiskas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk_brand::create([
            'nama_brand' => 'TRIXIE',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
