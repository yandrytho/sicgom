<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjecucionesPlanesPoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejecuciones_planes_poas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPlanOperativo')->unsigned();
            $table->integer('idTipoProgramacionEjecucion')->unsigned();
            $table->integer('idCronogramaEjecucion')->unsigned();
            $table->string('descripcion')->unsigned();
            $table->foreign('idPlanOperativo')->references('id')->on('plan_operativos');
            $table->foreign('idTipoProgramacionEjecucion')->references('id')->on('tipo_programas_ejecuciones');
            $table->foreign('idCronogramaEjecucion')->references('id')->on('cronogramas_ejecuciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejecuciones_planes_poas');
    }
}
