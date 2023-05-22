<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'Whiskas Ayam',
            'harga' => 20000,
            'deskripsi' =>'Terbuat dari ayam',
            'img' => 'IMG_3400.JPG',
            'stok' =>13,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'Whiskas tuna',
            'harga' => 20000,
            'deskripsi' =>'Terbuat dari tuna',
            'img' => 'IMG_3400.JPG',
            'stok' =>10,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 1,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Makanan Anjing',
            'harga' => 20000,
            'deskripsi' =>'Terbuat dari Babi',
            'img' => 'IMG_3400.JPG',
            'stok' =>9,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 2,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Whiskas BABI',
            'harga' => 20000,
            'deskripsi' =>'Terbuat dari BABI',
            'img' => 'IMG_3400.JPG',
            'stok' =>7,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 2,
            'produk_brand_id' => 1,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'Vitamin Kucing',
            'harga' => 20000,
            'deskripsi' =>'Terbuat dari Vitamin',
            'img' => 'IMG_3400.JPG',
            'stok' =>6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Produk::create([
            'produk_kategori_id' => 2,
            'produk_brand_id' => 1,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'vitamin anjing',
            'harga' => 20000,
            'deskripsi' =>'Terbuat dari vitamin',
            'img' => 'IMG_3400.JPG',
            'stok' =>3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 1,
            'kategori_hewan_id' => 3,
            'nama_produk' => 'Kalung kucing',
            'harga' => 20000,
            'deskripsi' =>'nyaman digunakan dan tidak menyakiti hewan peliharaan anda',
            'img' => 'IMG_3400.JPG',
            'stok' =>4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 1,
            'kategori_hewan_id' => 3,
            'nama_produk' => 'Kalung kucing',
            'harga' => 20000,
            'deskripsi' =>'nyaman digunakan dan tidak menyakiti hewan peliharaan anda',
            'img' => 'IMG_3400.JPG',
            'stok' =>8,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 1,
            'kategori_hewan_id' => 3,
            'nama_produk' => 'Kalung kucing',
            'harga' => 20000,
            'deskripsi' =>'nyaman digunakan dan tidak menyakiti hewan peliharaan anda',
            'img' => 'IMG_3400.JPG',
            'stok' =>12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
