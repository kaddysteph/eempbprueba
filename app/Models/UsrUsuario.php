<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsrUsuario
 *
 * @property $UsrUsuarioIdeem
 * @property $UsrUsuarioNombres
 * @property $UsrUsuarioApellidos
 * @property $UsrUsuarioDireccion
 * @property $UsrUsuarioNumeroIdentificacion
 * @property $UsrUsuarioNIT
 * @property $create_at
 * @property $update_at
 * @property $users_id
 * @property $UsrUsuarioDocumentoId_UsrDoctoIdentificacionId
 *
 * @property User $user
 * @property UsrServicio[] $usrServicios
 * @property UsrUsuarioDocumentoId $usrUsuarioDocumentoId
 * @property UsrUsuarioTelefono[] $usrUsuarioTelefonos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsrUsuario extends Model
{

    protected $table = 'UsrUsuario';
    
    static $rules = [
		'UsrUsuarioIdeem' => 'required',
		'users_id' => 'required',
		'UsrUsuarioDocumentoId_UsrDoctoIdentificacionId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['UsrUsuarioIdeem','UsrUsuarioNombres','UsrUsuarioApellidos','UsrUsuarioDireccion','UsrUsuarioNumeroIdentificacion','UsrUsuarioNIT','users_id','UsrUsuarioDocumentoId_UsrDoctoIdentificacionId'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usrServicios()
    {
        return $this->hasMany('App\Models\UsrServicio', 'UsrUsuario_UsrUsuarioIdeem', 'UsrUsuarioIdeem');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usrUsuarioDocumentoId()
    {
        return $this->hasOne('App\Models\UsrUsuarioDocumentoId', 'UsrDoctoIdentificacionId', 'UsrUsuarioDocumentoId_UsrDoctoIdentificacionId');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usrUsuarioTelefonos()
    {
        return $this->hasMany('App\Models\UsrUsuarioTelefono', 'UsrUsuario_UsrUsuarioIdeem', 'UsrUsuarioIdeem');
    }
    

}
