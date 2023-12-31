<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'username' => 'SagAsh',
            'password' => Hash::make('Daud123'),
            'name' => 'Daud Hidayat Ramadhan',
            'token' => 'test'
        ]);
        User::create([
            'username' => 'SagAsh2',
            'password' => Hash::make('Daud1234'),
            'name' => 'Daud',
            'token' => 'test2'
        ]);
    }
}
