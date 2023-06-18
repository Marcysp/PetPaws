<?php

namespace App\Console\Commands;

use App\Models\Detail_grooming;
use App\Models\Detail_pesanan;
use App\Models\Grooming;
use Carbon\Carbon;
use Illuminate\Console\Command;

class HapusOldGrooming extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hapus-old-grooming';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menghapus pesanan grooming yang sudah checkout lebih dari 24 jam dan mengembalikan stok produk.n';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $waktuTerakhir = Carbon::now()->subDay();

        $grooming = Grooming::where('status', 'checkout')
            ->where('updated_at', '<=', $waktuTerakhir)
            ->get();

        foreach ($grooming as $groomingItem) {
            $detailGrooming = Detail_grooming::where('grooming_id', $groomingItem->id)->get();

            foreach ($detailGrooming as $detail) {

                $detail->delete();
            }

            $groomingItem->delete();
        }

        $this->info('Pesanan grooming yang sudah checkout lebih dari 24 jam telah dihapus dan stok produk dikembalikan.');
    }
}
