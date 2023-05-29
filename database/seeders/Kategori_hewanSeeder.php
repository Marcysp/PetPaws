<?php

namespace Database\Seeders;

use App\Models\Kategori_hewan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kategori_hewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori_hewan::create([
            'nama_hewan' => 'Anjing',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Kategori_hewan::create([
            'nama_hewan' => 'Kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Kategori_hewan::create([
            'nama_hewan' => 'Burung',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Kategori_hewan::create([
            'nama_hewan' => 'ayam',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Kategori_hewan::create([
            'nama_hewan' => 'lainnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
