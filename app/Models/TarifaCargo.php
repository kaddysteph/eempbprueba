<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TarifaCargo
 *
 * @property $TarifaResolucion_TarifaResolucionId
 * @property $TarifaBloque_TarifaBloqueId
 * @property $CargoxConsumidor
 * @property $CargoxEnergia
 * @property $CargoUnitarioxPotenciaMaxima
 * @property $CargoUnitarioxPotenciaContratada
 * @property $CargoUnitarioxEnergiaenPunta
 * @property $CargoUnitarioxEnergiaIntermedia
 *
 * @property TarifaBloque $tarifaBloque
 * @property TarifaResolucion $tarifaResolucion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TarifaCargo extends Model
{
    protected $table = 'TarifaCargos'; 
    protected $primaryKey = 'TarifaResolucion_TarifaResolucionId';
   
    static $rules = [
		'TarifaResolucion_TarifaResolucionId' => 'required',
		'TarifaBloque_TarifaBloqueId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TarifaResolucion_TarifaResolucionId','TarifaBloque_TarifaBloqueId','CargoxConsumidor','CargoxEnergia','CargoUnitarioxPotenciaMaxima','CargoUnitarioxPotenciaContratada','CargoUnitarioxEnergiaenPunta','CargoUnitarioxEnergiaIntermedia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarifaBloque()
    {
        return $this->hasOne('App\Models\TarifaBloque', 'TarifaBloqueId', 'TarifaBloque_TarifaBloqueId');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarifaResolucion()
    {
        return $this->hasOne('App\Models\TarifaResolucion', 'TarifaResolucionId', 'TarifaResolucion_TarifaResolucionId');
    }
    

}
