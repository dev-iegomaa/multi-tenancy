<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class LandlordMigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'landlord:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will migrate landlord files at database';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Migrate fresh database');
        Artisan::call('migrate:fresh');
        $this->info(Artisan::output());
        $this->info('-------------------------');

        $this->info('Migrate landlord');
        Artisan::call('migrate');
        Artisan::call('migrate', [
            '--path' => 'database/migrations/landlord'
        ]);
        $this->info(Artisan::output());
        $this->info('Migrated landlord database');
        return self::SUCCESS;
    }
}
