<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategSeeder::class,
            EstadoSeeder::class,
            PaisSeeder::class,
            PlanoSeeder::class,
            RateSeeder::class,
            RestriSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
