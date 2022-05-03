<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Plano;

class PlanoSeeder extends Seeder
{
    public function run()
    {
        Plano::create([
            'designac' => 'Plano Básico',
            'preco' => '299,99 MT',
            'desc' => 'Maecenas nunc lectus, laoreet in molestie eget, mollis nec nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget tincidunt lectus, in volutpat urna. Quisque orci lacus, sagittis id nisl dictum, pharetra congue metus.',
            'durac' => 30
        ]);

        Plano::create([
            'designac' => 'Plano Familiar',
            'preco' => '899,99 MT',
            'desc' => 'Nam eget tincidunt lectus, in volutpat urna. Quisque orci lacus, sagittis id nisl dictum, pharetra congue metus. Pellentesque ut aliquam augue, vel volutpat leo. Donec molestie faucibus consectetur. Maecenas nunc lectus, laoreet in molestie eget, mollis nec nunc.',
            'durac' => 30
        ]);

        Plano::create([
            'designac' => 'Plano Familiar (x3)',
            'preco' => '2.499,99 MT',
            'desc' => 'Donec mollis sapien vel scelerisque molestie. Duis sem lectus, laoreet in tristique id, auctor in ligula. Sed hendrerit porta eleifend. Proin luctus ante eu est rutrum aliquam. Quisque diam nibh, faucibus sed orci a, imperdiet pharetra arcu.Sed vitae lorem augue. Maecenas quis dignissim velit. Nunc nunc lacus, interdum in quam vel, suscipit posuere odio.',
            'durac' => 90
        ]);
    }
}
