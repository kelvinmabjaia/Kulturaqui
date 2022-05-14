<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Restricao;

class RestriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restricao::create([
            'sigla' => 'G',
            'designac' => 'Público Geral'
        ]);
        
        Restricao::create([
            'sigla' => 'R',
            'designac' => 'Restrito a maiores de 18'
        ]);
    }
}
