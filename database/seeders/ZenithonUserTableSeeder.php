<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ZenithonUserTableSeeder extends Seeder
{
    public array $users = [
        [
            'name' => 'Zenithon',
            'email' => 'zenithon1@gmail.com',
            'password' => 'password',
        ],
        [
            'name' => 'Zenithon',
            'email' => 'zenithon2@gmail.com',
            'password' => 'password',
        ],
        [
            'name' => 'Zenithon',
            'email' => 'zenithon3@gmail.com',
            'password' => 'password',
        ],
        [
            'name' => 'Zenithon',
            'email' => 'zenithon4@gmail.com',
            'password' => 'password',
        ],
        [
            'name' => 'Zenithon',
            'email' => 'zenithon5@gmail.com',
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
