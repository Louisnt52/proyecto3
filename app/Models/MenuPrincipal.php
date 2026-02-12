<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuPrincipal extends Model
{
    protected $table = 'menusprincipales';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_modulo',
        'nombre',
        'icono',
        'orden',
        'estado'
    ];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class, 'id_modulo');
    }

    // relación inversa
    public function menus()
    {
        return $this->hasMany(Menu::class, 'id_menu_principal');
    }
}
