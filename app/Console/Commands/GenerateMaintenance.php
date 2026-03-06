<?php

namespace App\Console\Commands;
use App\Models\Flat;
use App\Models\MaintenancePayment;
use Illuminate\Console\Command;

class GenerateMaintenance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:maintenance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate monthly maintenance';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $flats = Flat::all();

        foreach ($flats as $flat) {

            MaintenancePayment::create([
                'flat_id' => $flat->id,
                'amount' => 2000,
                'month' => now()->startOfMonth(),
                'status' => 'pending'
            ]);

        }

    }
}
