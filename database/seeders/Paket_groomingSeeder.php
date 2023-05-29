<?php

namespace Database\Seeders;

use App\Models\Paket_grooming;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Paket_groomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming Kering Anjing',
            'harga' => '30000',
            'deskripsi_penanganan' => 'Grooming kering yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'anjing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming Kering Kucing',
            'harga' => '27000',
            'deskripsi_penanganan' => 'Grooming kering yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming kutu Anjing',
            'harga' => '45000',
            'deskripsi_penanganan' => 'Grooming menggunakan shampoo anti-kutu yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'anjing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming kutu Kucing',
            'harga' => '40000',
            'deskripsi_penanganan' => 'Grooming menggunakan shampoo anti-kutu yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming jamur Anjing',
            'harga' => '45000',
            'deskripsi_penanganan' => 'Grooming menggunakan shampoo anti-jamur yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'anjing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming jamur Kucing',
            'harga' => '40000',
            'deskripsi_penanganan' => 'Grooming menggunakan shampoo anti-jamur yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming kutu + jamur Anjing',
            'harga' => '55000',
            'deskripsi_penanganan' => 'Grooming menggunakan shampoo anti-kutu+jamur yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'anjing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming kutu + jamur Kucing',
            'harga' => '50000',
            'deskripsi_penanganan' => 'Grooming menggunakan shampoo anti-kutu+jamur yang meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'Grooming Anti-Gimbal',
            'harga' => '35000',
            'deskripsi_penanganan' => 'Grooming menggunakan produk shampoo dari Italia yang di khususkan untuk mempermudah membuka bulu gimbal dan mencegah bulu gimbal di kemudian hari. Mengkilapkan dan melembutkan bulu. Digunakan oleh para groomer professional untuk kucing dan anjing show. Grooming meliputi perapihan bulu telapak kaki dan bokong, serta pembersihan telinga dan gunting kuku. Pemberian parfum opsional.',
            'hewan' => 'kucing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'MouthWash',
            'harga' => '15000',
            'deskripsi_penanganan' => 'Cairan mouthwash untuk anjing dan kucing yang terbuat dari persimmon, rosemary, chrysanthemum dan madu. Molekul air aktif dapat menghilangkan bakteri penyebab bau mulut dan meningkatkan kesehatan perut.',
            'hewan' => 'both',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Paket_grooming::create([
            'jenis_grooming' => 'Digreaser',
            'harga' => '15000',
            'deskripsi_penanganan' => 'Dirancang khusus untuk mengangkat noda membandel pada bulu, noda dari kotoran telinga, bintik hitam jerawat di dagu hewan, warna kekuningan pada bulu, serta ekor dan bulu yang berminyak.',
            'hewan' => 'both',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Paket_grooming::create([
            'jenis_grooming' => 'tetes Telinga Anti-kutu (Ear Mites)',
            'harga' => '15000',
            'deskripsi_penanganan' => 'Obat tetes telinga hewan kesayangan yang bermanfaat untuk membunuh kutu telinga (ear mites) dengan dan atau tanpa infeksi telinga.',
            'hewan' => 'both',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
