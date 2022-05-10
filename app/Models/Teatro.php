<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teatro extends Model
{
    use HasFactory;

    protected $table = 'kulteatro';

    protected $fillable = [
        'user_id',
        'titulo',
        'link',
        'link_trailer',
        'kultcateg_id',
        'descrica',
        'idd',
        'dataLanc',
        'durac',
        'views',
        'estado_id'
    ];

    public function rates(){
        return $this->hasMany(Rate::class, 'kulteatro_id', 'id');
    }

}
