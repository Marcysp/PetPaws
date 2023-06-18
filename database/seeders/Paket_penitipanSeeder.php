<?php

namespace Database\Seeders;

use App\Models\Paket_penitipan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Paket_penitipanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paket_penitipan::create([
            'jenis_penitipan' => 'Bronze Kucing',
            'harga' => '20000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 60 x 40 x 50 cm & literbox. Owner perlu membawa makanan sendiri untuk anabul',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Bronze Anjing',
            'harga' => '25000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 60 x 40 x 50 cm & literbox. Owner perlu membawa makanan sendiri untuk anabul',
            'hewan' => 'anjing kecil',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Bronze Anjing+',
            'harga' => '35000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 90 x 60 x 70 cm & literbox. Owner perlu membawa makanan sendiri untuk anabul',
            'hewan' => 'anjing besar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Silver Kucing',
            'harga' => '35000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 75 x 50 x 50 cm, Literbox dan free obat cacing/kutu 1 kali. Owner perlu membawa makanan sendiri untuk anabul',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Silver Anjing',
            'harga' => '40000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 75 x 50 x 50 cm, literbox dan free obat cacing/kutu/vitamin bulu 1 kali. Owner perlu membawa makanan sendiri untuk anabul',
            'hewan' => 'anjing kecil',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Silver Anjing+',
            'harga' => '45000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 90 x 60 x 70 cm, literbox dan free obat cacing/kutu/vitamin bulu 1 kali. Owner perlu membawa makanan sendiri untuk anabul',
            'hewan' => 'anjing besar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Gold Kucing',
            'harga' => '45000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 75 x 50 x 50 cm, Literbox, dry and wet food. Owner hanya perlu membawa vitamin tambahan untuk anabul',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Gold Anjing',
            'harga' => '50000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 90 x 60 x 70 cm, literbox, dry and wet food. Owner hanya perlu membawa vitamin tambahan untuk anabul',
            'hewan' => 'anjing kecil',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Gold Anjing+',
            'harga' => '70000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 75 x 45 x 110 cm, literbox dan free obat cacing/kutu/vitamin bulu 1 kali. Owner hanya perlu membawa vitamin tambahan untuk anabul',
            'hewan' => 'anjing besar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Platinum Kucing',
            'harga' => '67000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 75 x 50 x 50 cm, Literbox, dry and wet food. Free grooming setiap 3 hari 1x selama menginap',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Platinum Anjing',
            'harga' => '77000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 90 x 60 x 70 cm, literbox, dry and wet food. Free grooming setiap 3 hari 1x selama menginap dan free time di halaman untuk anjing selama 20 perhari',
            'hewan' => 'anjing kecil',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_penitipan::create([
            'jenis_penitipan' => 'Platinum Anjing+',
            'harga' => '100000',
            'deskripsi_layanan' => 'Tersedia Kandang ukuran 200 x 104 x 120 cm, literbox dan free obat cacing/kutu/vitamin bulu 1 kali. Free grooming setiap 3 hari 1x selama menginap dan free time di halaman untuk anjing selama 20 perhari',
            'hewan' => 'anjing besar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
