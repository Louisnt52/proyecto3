<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VMenuPrincipal extends Model
{
    protected $table = 'vmenuprincipal';

    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'id_modulo' => 'integer',
        'id_menu_principal' => 'integer',
        'id_menu' => 'integer',
        'id_rol_menu_principal' => 'integer',
        'id_rol' => 'integer',
        'orden' => 'integer'
    ];
}
