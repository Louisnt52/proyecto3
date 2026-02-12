<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VPersonaUsuario extends Model
{
    protected $table = 'vpersonausuario';

    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'id' => 'integer',
        'id_rol' => 'integer',
        'id_usuario' => 'integer',
        'id_persona' => 'integer',
        'fecha_nacimiento' => 'date',
        'email_verified_at' => 'datetime',
        'ultimo_acceso' => 'datetime',
        'bloqueado_hasta' => 'datetime',
        'debe_cambiar_password' => 'boolean',
        'password_temporal' => 'boolean',
        'intentos_fallidos' => 'integer'
    ];
}
