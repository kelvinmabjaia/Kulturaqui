<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'gender' => 'M',
            'birthday' => Carbon::now()->format('Y-m-d'),
            'phone' => '846769009',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 4,
            'kultpais_id' => 1,
            'kultestad_id' => 1,
        ]);

        User::create([
            'name' => 'colab',
            'gender' => 'M',
            'birthday' => Carbon::now()->format('Y-m-d'),
            'phone' => '826769009',
            'email' => 'colab@gmail.com',
            'password' => Hash::make('password'),
            'role' => 3,
            'kultpais_id' => 1,
            'kultestad_id' => 1,
        ]);

    }
}
