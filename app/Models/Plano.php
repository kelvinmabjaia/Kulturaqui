<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $table = 'kultplano';

    protected $fillable = [
        'designac',
        'preco',
        'desc',
        'durac'
    ];
}
