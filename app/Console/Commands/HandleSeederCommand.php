<?php

namespace App\Console\Commands;

use App\Http\Services\TenantService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class HandleSeederCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:seeder {database} {class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command handle seeder at system';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $database = $this->argument('database');
        $class = $this->argument('class');

        TenantService::switchToTenant($database);
        $this->info('Seeder started');
        Artisan::call("db:seed", ['--class' => $class]);
        $this->info(Artisan::output());

        return self::SUCCESS;
    }
}
