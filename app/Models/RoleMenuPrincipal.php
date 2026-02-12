<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleMenuPrincipal extends Model
{
    protected $table = 'rolesmenuprincipales';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_rol',
        'id_menu_principal',
        'fecha_asignacion',
        'estado'
    ];

    protected $casts = [
        'fecha_asignacion' => 'datetime'
    ];

    public function role()
    {
        return $this->belongsTo(Roles::class, 'id_rol');
    }

    public function menuPrincipal()
    {
        return $this->belongsTo(MenuPrincipal::class, 'id_menu_principal');
    }
}
