<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_persona',
        'id_rol',
        'username',
        'email',
        'clave_inicial',
        'password',
        'ultimo_acceso',
        'intentos_fallidos',
        'bloqueado_hasta',
        'debe_cambiar_password',
        'password_temporal',
        'estado'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'clave_inicial'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'ultimo_acceso' => 'datetime',
        'bloqueado_hasta' => 'datetime',
        'debe_cambiar_password' => 'boolean',
        'password_temporal' => 'boolean'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    public function role()
    {
        return $this->belongsTo(Roles::class, 'id_rol');
    }
}
