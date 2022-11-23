<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizacion extends Model
{
    protected $table = 'UsrUsuario';
    
    

    protected $perPage = 20;

    protected $fillable = ['UsrUsuarioIdeem', 'UsrUsuarioNombres', 'UsrUsuarioApellidos', 'UsrUsuarioDireccion', 'UsrUsuarioDPI', 'UsrUsuarioNIT', 'users_id'];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }

    public function usrUsuarioTelefonos()
    {
        return $this->hasMany('App\Models\UsrUsuarioTelefono', 'UsrUsuario_UsrUsuarioIdeem', 'UsrUsuarioIdeem');
    }

}
