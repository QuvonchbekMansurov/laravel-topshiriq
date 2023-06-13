<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'Menejer',
            'role_id'=>1,
            'email'=> 'manage@company.com',
            'password' => Hash::make('secret'),
        ]);
    }
}