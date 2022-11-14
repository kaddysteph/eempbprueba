<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsrUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsrUsuario', function (Blueprint $table) {
            $table->integer('UsrUsuarioIdeem')->primary();
            $table->string('UsrUsuarioNombre', 75)->nullable();
            $table->string('UsrUsuarioApellido', 75)->nullable();
            $table->string('UsrUsuarioDireccion', 100)->nullable();
            $table->string('UsrUsuarioDPI', 13)->nullable();
            $table->string('UsrUsuarioNIT', 15)->nullable();
            $table->date('UsrUsuarioFechaRegistro')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsrUsuario');
    }
}
