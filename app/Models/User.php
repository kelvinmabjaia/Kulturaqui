<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'gender',
        'birthday',
        'phone',
        'email',
        'password',
        'kultpais_id',
        'kultpayme_id',
        'kultestad_id',
        'role'
    ];

    public function assinatura(){ return $this->hasMany(Assinatura::class, 'id', 'user_id'); }

    public function pagamento(){ return $this->hasMany(Pagamento::class, 'id', 'user_id'); }

    public function pais(){ return $this->belongsTo(Pais::class, 'kultpais_id'); }

    public function estado(){ return $this->belongsTo(Estado::class. 'kultestad_id'); }

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
