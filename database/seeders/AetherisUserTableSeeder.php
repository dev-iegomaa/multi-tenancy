<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AetherisUserTableSeeder extends Seeder
{
    public array $users = [
        [
            'name' => 'Aetheris',
            'email' => 'aetheris@gmail.com',
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
