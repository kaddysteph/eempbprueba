<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsrUsuarioTelefono
 *
 * @property $UsrUsuarioTelefonoId
 * @property $UsrUsuarioTelefono
 * @property $create_at
 * @property $update_at
 * @property $UsrUsuario_UsrUsuarioIdeem
 *
 * @property UsrUsuario $usrUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsrUsuarioTelefono extends Model
{

    protected $table = 'UsrUsuarioTelefono';
    
    static $rules = [
		'UsrUsuarioTelefonoId' => 'required',
		'UsrUsuario_UsrUsuarioIdeem' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['UsrUsuarioTelefonoId','UsrUsuarioTelefono','create_at','update_at','UsrUsuario_UsrUsuarioIdeem'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usrUsuario()
    {
        return $this->hasOne('App\Models\UsrUsuario', 'UsrUsuarioIdeem', 'UsrUsuario_UsrUsuarioIdeem');
    }
    

}
