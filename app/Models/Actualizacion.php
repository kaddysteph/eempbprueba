<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizacion extends Model
{
    protected $table = 'UsrUsuario';
    
    protected $primaryKey = 'UsuarioIdeem';

    protected $perPage = 20;

    protected $fillable = ['UsuarioIdeem', 'UsrUsuarioNombres', 'UsrUsuarioApellidos', 'UsrUsuarioDireccion', 'UsrUsuarioDPI', 'UsrUsuarioNIT'];

}
