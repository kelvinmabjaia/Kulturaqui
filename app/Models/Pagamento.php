<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'kultpayme';

    protected $fillable = [
        'user_id',
        'metodo',
        'nrConta',
    ];
    
}
