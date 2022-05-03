<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{

    public function run()
    {
        Role::create([
            'designac' => 'Assinante',
        ]);

        Role::create([
            'designac' => 'Anunciante',
        ]);

        Role::create([
            'designac' => 'Colaborador',
        ]);

        Role::create([
            'designac' => 'Administrador',
        ]);
    }
}
