<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class LandlordUserTableSeeder extends Seeder
{
    public array $users = [
        [
            'name' => 'Landlord',
            'email' => 'landlord@gmail.com',
            'password' => 'password',
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password'])
            ]);
        }
    }
}
