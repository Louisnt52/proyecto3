<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_rol');
    }

    public function menusPrincipales()
    {
        return $this->belongsToMany(
            MenuPrincipal::class,
            'rolesmenuprincipales',
            'id_rol',
            'id_menu_principal'
        );
    }
}
