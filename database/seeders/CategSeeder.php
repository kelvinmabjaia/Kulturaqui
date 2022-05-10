<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categoria;

class CategSeeder extends Seeder
{
    public function run()
    {
        Categoria::create([ 'designac' => 'Acção']);
        Categoria::create([ 'designac' => 'Comédia']);
        Categoria::create([ 'designac' => 'Drama']);
        Categoria::create([ 'designac' => 'Terror']);
        Categoria::create([ 'designac' => 'Romance']);
    }
}
