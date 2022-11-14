<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifaCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TarifaCargos', function (Blueprint $table) {
            $table->integer('TarifaResolucion_TarifaResolucionId')->index('fk_TarifaResolucion_has_TarifaBloque_TarifaResolucion1_idx');
            $table->integer('TarifaBloque_TarifaBloqueId')->index('fk_TarifaResolucion_has_TarifaBloque_TarifaBloque1_idx');
            $table->double('CargoxConsumidor')->nullable();
            $table->double('CargoxEnergia')->nullable();
            $table->double('CargoUnitarioxPotenciaMaxima')->nullable();
            $table->double('CargoUnitarioxPotenciaContratada')->nullable();
            $table->double('CargoUnitarioxEnergiaenPunta')->nullable();
            $table->double('CargoUnitarioxEnergiaIntermedia')->nullable();

            $table->primary(['TarifaResolucion_TarifaResolucionId', 'TarifaBloque_TarifaBloqueId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TarifaCargos');
    }
}
