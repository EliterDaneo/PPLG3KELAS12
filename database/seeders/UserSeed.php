<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Rafi',
                'email' => 'rafi@example.com',
                'password' => bcrypt('123456'),
                'level' => 'admin'
            ],
            [
                'name' => 'Rohim',
                'email' => 'rohim@example.com',
                'password' => bcrypt('123456'),
                'level' => 'siswa'
            ]
        ];
        
        foreach($user as $key => $u){
            User::create($u);
        }
    }
}