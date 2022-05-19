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
        'kultestad_id',
        'imgThumb'
    ];

    public function estado(){
        return $this->belongsTo(Estado::class, 'kultestad_id');
    }
    
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'kultcateg_id', 'id');
    }
    
    public function restricao(){
        return $this->belongsTo(Restricao::class, 'idd', 'id');
    }
    
    public function imagens(){
        return $this->hasMany(Imagem::class, 'kulteatro_id', 'id');
    }

    public function rates(){
        return $this->hasMany(Rate::class, 'kulteatro_id', 'id');
    }

}
