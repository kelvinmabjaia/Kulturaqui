<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    public function run()
    {
        Tipo::create([ 'designac' => 'Teatro']);
        Tipo::create([ 'designac' => 'Filme']);
        Tipo::create([ 'designac' => 'Outros']);
    }
}
