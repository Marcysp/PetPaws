<?php

namespace App\Console\Commands;

use App\Models\Detail_pesanan;
use App\Models\Pesanan;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Console\Command;

class HapusPesananCheckout extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pesanan:hapus-checkout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menghapus pesanan checkout beserta detailnya yang telah melewati 24 jam';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $waktuTerakhir = Carbon::now()->subDay(); // Mengurangi 1 hari dari waktu saat ini

        $pesanan = Pesanan::where('status', 'checkout')
            ->where('updated_at', '<=', $waktuTerakhir)
            ->get();

        foreach ($pesanan as $pesananItem) {
            $detailPesanan = Detail_pesanan::where('pesanan_id', $pesananItem->id)->get();

            foreach ($detailPesanan as $detail) {
                $produk = Produk::find($detail->produk_id);
                $produk->stok += $detail->qty;
                $produk->save();
                $detail->delete();
            }

            $pesananItem->delete();
        }

        $this->info('Pesanan checkout yang melewati 24 jam berhasil dihapus.');
    }
}
