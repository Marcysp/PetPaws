<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori_hewan;
use App\Models\Produk_brand;
use App\Models\Produk_kategori;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        // Produk_kategori::factory(3)->create();
        // Produk_brand::factory(3)->create();
        // Kategori_hewan::factory(5)->create();

        $this->call([
            Produk_kategoriSeeder::class,
            Produk_brandSeeder::class,
            Kategori_hewanSeeder::class,
            ProdukSeeder::class,
            UserSeeder::class
        ]);
    }
}
