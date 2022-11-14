<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsrCargoHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsrCargoHistorico', function (Blueprint $table) {
            $table->string('UsrSerCodigo', 15);
            $table->integer('UsrCarCodigo')->nullable();
            $table->dateTime('UsrCarFechaOp')->nullable();
            $table->dateTime('UsrCarFechaLecturaActual')->nullable();
            $table->double('UsrCarLecturaActual')->nullable();
            $table->double('UsrCarLecturaAnterior')->nullable();
            $table->double('UsrCarDemandaContratada')->nullable();
            $table->double('UsrCarDemandaConsumida')->nullable();
            $table->boolean('UsrCarParticipacionPunta')->nullable();
            $table->double('UsrCarMultiplicador')->nullable();
            $table->double('UsrCarKwhSocial')->nullable();
            $table->double('UsrCarKwhSimple')->nullable();
            $table->float('UsrCarKwhPf', 10, 0)->nullable();
            $table->double('UsrCarKwhIndemnizar')->nullable();
            $table->double('UsrCarCargoFijo')->nullable();
            $table->double('UsrCarCargoSocial')->nullable();
            $table->double('UsrCarCargoNoSocial')->nullable();
            $table->double('UsrCarCargoTasaMunicipal')->nullable();
            $table->double('UsrCarCargoIva')->nullable();
            $table->double('UsrCarCargoPeriodo')->nullable();
            $table->double('UsrCarCargoDemandaContratada')->nullable();
            $table->double('UsrCarCargoDemandaConsumida')->nullable();
            $table->double('UsrCarCargoKwExc')->nullable();
            $table->double('UsrCarCargoPf')->nullable();
            $table->double('UsrCarCargoIndemnizar')->nullable();
            $table->string('UsrCarDescripcionIndemnizar', 80)->nullable();
            $table->string('UsrCarDescripcion', 80);
            $table->boolean('UsrCarAnulado')->nullable();
            $table->boolean('UsrCarAplicaCargo')->nullable();
            $table->longText('UsrCarAnuladoObservacion')->nullable();
            $table->string('UsrCarAnuladoUsuario', 4)->nullable();
            $table->string('UsrCarAnuladoFecha', 50)->nullable();
            $table->float('UsrCarDiasCredito', 10, 0)->nullable();
            $table->float('UsrCarTipoCargo', 10, 0)->nullable();
            $table->dateTime('UsrFacEmiFechaEmision')->nullable();
            $table->float('UsrFacEmiCodigo', 10, 0)->nullable();
            $table->string('UsrFacEmiSerie', 3)->nullable();
            $table->string('ConUsrCodigoFacturo', 10)->nullable();
            $table->string('ConUsrCodigo', 4)->nullable();
            $table->string('ConLecCodigo', 4)->nullable();
            $table->string('ConTarCodigo', 1)->nullable();
            $table->string('UsrServicio_UsrSerCodigo', 15)->index('fk_UsrCargoHistorico_UsrServicio_idx');

            $table->primary(['UsrSerCodigo', 'UsrCarDescripcion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsrCargoHistorico');
    }
}
