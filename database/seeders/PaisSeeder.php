<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pais;

class PaisSeeder extends Seeder
{
    public function run()
    {
        Pais::create([
            'sigla' => 'MOZ',
            'designac' => 'Moçambique'
        ]);
    }
}
