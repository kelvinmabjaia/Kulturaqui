<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restricao extends Model
{
    use HasFactory;

    protected $table = 'kultrestri';

    protected $fillable = [
        'sigla',
        'designac'
    ];
}
