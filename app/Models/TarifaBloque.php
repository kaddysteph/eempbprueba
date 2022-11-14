<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TarifaBloque
 *
 * @property $TarifaBloqueId
 * @property $TarifaBloqueNombre
 * @property $TarifaBloqueCodigo
 * @property $TarifaBloqueCondicion
 * @property $TarifaBloqueObservacion
 * @property $TarifaBloqueKwhInicial
 * @property $TarifaBloqueKwhFinal
 * @property $TarifaBloqueDemandaInicial
 * @property $TarifaBloqueParticipacionPunta
 *
 * @property TarifaCargo[] $tarifaCargos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TarifaBloque extends Model
{

    protected $table = 'TarifaBloque';
    
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TarifaBloqueId','TarifaBloqueNombre','TarifaBloqueCodigo','TarifaBloqueCondicion','TarifaBloqueObservacion','TarifaBloqueKwhInicial','TarifaBloqueKwhFinal','TarifaBloqueDemandaInicial','TarifaBloqueParticipacionPunta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarifaCargos()
    {
        return $this->hasMany('App\Models\TarifaCargo', 'TarifaBloque_TarifaBloqueId', 'TarifaBloqueId');
    }
    

}
