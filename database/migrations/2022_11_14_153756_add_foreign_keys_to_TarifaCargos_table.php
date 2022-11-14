<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTarifaCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('TarifaCargos', function (Blueprint $table) {
            $table->foreign(['TarifaBloque_TarifaBloqueId'], 'fk_TarifaResolucion_has_TarifaBloque_TarifaBloque1')->references(['TarifaBloqueId'])->on('TarifaBloque')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['TarifaResolucion_TarifaResolucionId'], 'fk_TarifaResolucion_has_TarifaBloque_TarifaResolucion1')->references(['TarifaResolucionId'])->on('TarifaResolucion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TarifaCargos', function (Blueprint $table) {
            $table->dropForeign('fk_TarifaResolucion_has_TarifaBloque_TarifaBloque1');
            $table->dropForeign('fk_TarifaResolucion_has_TarifaBloque_TarifaResolucion1');
        });
    }
}
