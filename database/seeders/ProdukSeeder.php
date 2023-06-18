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
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Tulia Senior Cat Tower with Scratching Posts, Four Platforms, Top Platform with Backrest, Beige Medium',
            'harga' => 480000,
            'deskripsi' =>'Pohon kucing tertutup mewah kami memberikan kenyamanan maksimal bagi teman berbulu Anda untuk bersantai, bersantai, dan tidur siang dengan damai. plus itu bagus untuk menggosok wajah',
            'img' => 'Tulia.JPG',
            'stok' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Produk::create([
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Casta Cat Tree with Condo',
            'harga' => 530000,
            'deskripsi' =>'Dibungkus dengan kain mewah yang sangat lembut di dalam dan luar',
            'img' => 'Casta.JPG',
            'stok' =>7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Produk::create([
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Miguel Fold and Store Cat Hammockl',
            'harga' => 540000,
            'deskripsi' =>'Ideal untuk ruang kecil',
            'img' => 'Miguel.JPG',
            'stok' =>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Cuddly Condos with Tunnel',
            'harga' => 510000,
            'deskripsi' =>'Kondominium bergabung dengan terowongan sisi lembut dengan lubang intip membuat permainan petak umpet yang hebat',
            'img' => 'Cuddly.JPG',
            'stok' =>4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Abby 65-in Cat Tree',
            'harga' => 1020000,
            'deskripsi' =>'Kenyamanan Dalam Ruangan - Semua platform ditutupi oleh boneka lembut yang memberi kucing Anda tempat yang sangat nyaman untuk bersantai, bersantai, dan tidur siang. Penutup kain yang lembut dan mewah membuat tidur siang menjadi nyaman, plus bagus untuk menggosok wajah dan menggosok wajah',
            'img' => 'Abby.JPG',
            'stok' =>3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Baza Grande Scratching Post',
            'harga' => 490000,
            'deskripsi' =>'Cocok untuk anak kucing dan kucing dewasa, kucing Anda akan selalu merasa berjiwa muda',
            'img' => 'Baza.JPG',
            'stok' =>2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Celeste 69-in Cat Tower',
            'harga' => 1150000,
            'deskripsi' =>'Ideal untuk beberapa kucing',
            'img' => 'Celeste.JPG',
            'stok' =>1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 3,
            'produk_brand_id' => 4,
            'kategori_hewan_id' => 2,
            'nama_produk' => 'Badalona Gray Cat Tower',
            'harga' => 850000,
            'deskripsi' =>'Pos yang dibungkus sisal menyediakan jalan keluar yang sehat untuk insting menggaruk alami kucing alih-alih menggunakan furnitur atau karpet Anda; tahan lama dan aman untuk digunakan hewan peliharaan Anda',
            'img' => 'Badalona.JPG',
            'stok' =>4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'Daily Multi',
            'harga' => 134000,
            'deskripsi' =>'Terbuat dari ayam',
            'img' => 'dailymulti.JPG',
            'stok' =>13,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'Cordyceps - M',
            'harga' => 163000,
            'deskripsi' =>'Terbuat dari Mushroom',
            'img' => 'Mushroom.JPG',
            'stok' =>10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

                Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'RXvitamin',
            'harga' => 536000,
            'deskripsi' =>'Terbuat dari Green Tea Extract',
            'img' => 'RXvitamin.JPG',
            'stok' =>5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'Progility minis',
            'harga' => 297000,
            'deskripsi' =>'Terbuat dari apel vinegar',
            'img' => 'Progility.JPG',
            'stok' =>9,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'krill bites',
            'harga' => 80000,
            'deskripsi' =>'Terbuat dari coconut and Fish',
            'img' => 'Krillbites.JPG',
            'stok' =>13,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'LaxaCat',
            'harga' => 160000,
            'deskripsi' =>'Terbuat dari Oil',
            'img' => 'Laxacat.JPG',
            'stok' =>7,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'PetLab.co',
            'harga' => 223000,
            'deskripsi' =>'Terbuat dari Fish',
            'img' => 'petlab.JPG',
            'stok' =>6,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'GNC',
            'harga' => 290000,
            'deskripsi' =>'Terbuat dari Chicken',
            'img' => 'GNC.JPG',
            'stok' =>15,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Produk::create([
                'produk_kategori_id' => 1,
                'produk_brand_id' => 3,
                'kategori_hewan_id' => 1,
                'nama_produk' => 'Four In One',
                'harga' => 193000,
                'deskripsi' =>'Terbuat dari Pellet',
                'img' => 'IE.JPG',
                'stok' =>30,
                'created_at' => now(),
                'updated_at' => now()
        ]);
        Produk::create([
            'produk_kategori_id' => 1,
            'produk_brand_id' => 3,
            'kategori_hewan_id' => 1,
            'nama_produk' => 'Healthy Gut',
            'harga' => 182000,
            'deskripsi' =>'Terbuat dari Freeze Dried',
            'img' => 'Healthy.JPG',
            'stok' =>28,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
