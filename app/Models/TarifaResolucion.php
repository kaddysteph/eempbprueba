<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TarifaResolucion
 *
 * @property $TarifaResolucionId
 * @property $TarifaResolucionDescripcion
 * @property $TarifaResolucionFechaInicial
 * @property $TarifaResolucionFechaFinal
 * @property $TarifaResolucionEstado
 * @property $TarifaResolucionObservacion
 *
 * @property TarifaCargo[] $tarifaCargos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TarifaResolucion extends Model
{

    protected $table = 'TarifaResolucion';
    
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TarifaResolucionId','TarifaResolucionDescripcion','TarifaResolucionFechaInicial','TarifaResolucionFechaFinal','TarifaResolucionEstado','TarifaResolucionObservacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarifaCargos()
    {
        return $this->hasMany('App\Models\TarifaCargo', 'TarifaResolucion_TarifaResolucionId', 'TarifaResolucionId');
    }
    

}
