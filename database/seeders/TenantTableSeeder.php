<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::insert([
            [
                'name' => 'zenithon',
                'domain' => 'zenithon-multi.cloud',
                'database' => 'saas_zenithon',
                'db_user' => 'root',
                'db_pass' => ''
            ],
            [
                'name' => 'aetheris',
                'domain' => 'aetheris-multi.cloud',
                'database' => 'saas_aetheris',
                'db_user' => 'root',
                'db_pass' => ''
            ],
            [
                'name' => 'luminex',
                'domain' => 'luminex-multi.cloud',
                'database' => 'saas_luminex',
                'db_user' => 'root',
                'db_pass' => ''
            ]
        ]);
    }
}
