<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsrServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsrServicio', function (Blueprint $table) {
            $table->integer('UsrCatCodigoPropietario')->nullable();
            $table->string('UsrSerCodigo', 15)->primary();
            $table->string('UsrSerCodigoPropietario', 15)->nullable();
            $table->string('UsrSerCodigoUsuario', 15)->nullable();
            $table->string('UsrSerCategoria', 4)->nullable();
            $table->string('UsrSerGiro', 25)->nullable();
            $table->string('UsrSerNombreUsuario', 80)->nullable();
            $table->string('UsrSerDireccion', 100)->nullable();
            $table->float('UsrSerLugarAldea', 10, 0)->nullable();
            $table->float('UsrSerMunicipio', 10, 0)->nullable();
            $table->float('UsrSerDepartamento', 10, 0)->nullable();
            $table->string('UsrSerContador', 20)->nullable();
            $table->double('UsrSerDeposito')->nullable()->unique('UsrSerDeposito');
            $table->string('UsrSerTelefono', 30)->nullable();
            $table->string('UsrDpi', 50)->nullable();
            $table->string('UsrSerNit', 15)->nullable();
            $table->string('UsrSerOrdenTrabajo', 10)->nullable();
            $table->string('UsrNombreFactura', 50)->nullable();
            $table->string('UsrDireccionFactura', 50)->nullable();
            $table->string('UsrNitFactura', 50)->nullable();
            $table->double('UsrSerMultiplicador')->nullable();
            $table->double('UsrSerDemandaContratada')->nullable();
            $table->boolean('UsrSerParticipacionPunta')->nullable();
            $table->string('ConVolCodigo', 50)->nullable();
            $table->string('ConTserCodigo', 4)->nullable();
            $table->boolean('UsrSerTemporal')->nullable();
            $table->string('UsrSerInstalador', 80)->nullable();
            $table->dateTime('UsrSerFechaInstalacion')->nullable();
            $table->boolean('UsrSerActivo')->nullable();
            $table->boolean('UsrSerCondicionPago')->nullable();
            $table->string('UsrSerCondicionPagoLeyenda', 100)->nullable();
            $table->boolean('UsrSerActivoDesc')->nullable();
            $table->dateTime('UsrFechaActualizacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsrServicio');
    }
}
