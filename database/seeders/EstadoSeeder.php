<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    public function run()
    {
        Estado::create([
            'designac' => 'Activo'
        ]);

        Estado::create([
            'designac' => 'Pendente'
        ]);

        Estado::create([
            'designac' => 'Bloqueado'
        ]);
    }
}
