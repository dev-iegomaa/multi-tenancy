<?php

namespace App\Console\Commands;

use App\Http\Services\TenantService;
use App\Models\Tenant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class TenantMigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will migrate database at all tenancy';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $tenants = Tenant::get();
        foreach ($tenants as $tenant) {
            $this->info("Migrate fresh tenant $tenant->name database");
            TenantService::switchToTenant(config("connections.$tenant->name"));
            Artisan::call('migrate:fresh');
            $this->info(Artisan::output());
        }
        return self::SUCCESS;
    }
}
