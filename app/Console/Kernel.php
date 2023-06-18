<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('pesanan:hapus-checkout')->daily(); // Menjadwalkan perintah untuk dijalankan setiap hari
        $schedule->command('app:hapus-old-grooming')->daily(); // Menjadwalkan perintah untuk dijalankan setiap hari
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
