<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsrCargoHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('UsrCargoHistorico', function (Blueprint $table) {
            $table->foreign(['UsrServicio_UsrSerCodigo'], 'fk_UsrCargoHistorico_UsrServicio')->references(['UsrSerCodigo'])->on('UsrServicio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UsrCargoHistorico', function (Blueprint $table) {
            $table->dropForeign('fk_UsrCargoHistorico_UsrServicio');
        });
    }
}
