<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifaResolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TarifaResolucion', function (Blueprint $table) {
            $table->integer('TarifaResolucionId', true);
            $table->string('TarifaResolucionDescripcion', 45)->nullable();
            $table->date('TarifaResolucionFechaInicial')->nullable();
            $table->date('TarifaResolucionFechaFinal')->nullable();
            $table->boolean('TarifaResolucionEstado')->nullable();
            $table->string('TarifaResolucionObservacion', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TarifaResolucion');
    }
}
