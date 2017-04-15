<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones_metas', function (Blueprint $table){
            $table->increments('id');
            $table->integer('idCategoriaEvidencia')->unsigned();
            $table->integer('idTipoEstadoMeta')->unsigned();
            $table->integer('idTiempoPlanificacion')->unsigned();
            $table->integer('idmetaPOA')->unsigned();
            $table->string('cumplimientoEjecucion');
            $table->string('documentoEvidencia');
            $table->integer('totalEjecucion');
            $table->string('observacion');
            $table->foreign('idCategoriaEvidencia')->references('id')->on('categoria_evidencias');
            $table->foreign('idTipoEstadoMeta')->references('id')->on('tipos_estados_metas');
            $table->foreign('idTiempoPlanificacion')->references('id')->on('tiempos_planificaciones');
            $table->foreign('idmetaPOA')->references('id')->on('metas__p_o_as');
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
        Schema::dropIfExists('evaluaciones_metas');
    }
}
