<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifaBloqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TarifaBloque', function (Blueprint $table) {
            $table->integer('TarifaBloqueId')->primary();
            $table->string('TarifaBloqueNombre', 75)->nullable();
            $table->string('TarifaBloqueCodigo', 10)->nullable();
            $table->string('TarifaBloqueCondicion', 75)->nullable();
            $table->string('TarifaBloqueObservacion', 45)->nullable();
            $table->integer('TarifaBloqueKwhInicial')->nullable();
            $table->integer('TarifaBloqueKwhFinal')->nullable();
            $table->integer('TarifaBloqueDemandaInicial')->nullable();
            $table->boolean('TarifaBloqueParticipacionPunta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TarifaBloque');
    }
}
