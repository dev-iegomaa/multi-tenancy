<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class TenantService
{
    public static function switchToTenant(string $domain): void
    {
        $database = self::getDatabaseName($domain);

        /**
         * Avoid switching if already connected to the correct database
         */
        if (Config::get('database.connections.landlord.database') === $database) {
            return;
        }

        DB::purge('landlord');
        Config::set('database.connections.landlord.database', $database);
        DB::reconnect('landlord');

        /***
         * If you have more than one connection you can make it.
         * 1. landlord for -> owner.
         * 2. tenant for -> clients.
         */
//        DB::purge('landlord'); // landlord -> stop connection
//        Config::set('database.connections.tenant.database', $database); // tenant -> connection want to set
//        DB::connection('tenant')->reconnect(); // tenant -> connection want to set
//        DB::setDefaultConnection('tenant'); // tenant -> connection want to set
    }

    protected static function getDatabaseName(string $domain): string
    {
        return config('connections.' . strchr($domain, '-', true));
    }
}
