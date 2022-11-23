<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsrUsuarioDocumentoId
 *
 * @property $UsrDoctoIdentificacionId
 * @property $UsrDoctoIdentificacion
 *
 * @property UsrUsuario[] $usrUsuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsrUsuarioDocumentoId extends Model
{

    protected $table = 'UsrUsuarioDocumentoId';
    
    static $rules = [
		'UsrDoctoIdentificacionId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['UsrDoctoIdentificacionId','UsrDoctoIdentificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usrUsuarios()
    {
        return $this->hasMany('App\Models\UsrUsuario', 'UsrUsuarioDocumentoId_UsrDoctoIdentificacionId', 'UsrDoctoIdentificacionId');
    }
    

}
