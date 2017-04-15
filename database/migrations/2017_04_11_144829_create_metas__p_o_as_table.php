<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasPOAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas__p_o_as', function (Blueprint $table){
            $table->increments('id');
            $table->integer('idActividadMeta')->unsigned();
            $table->integer('idIndicador')->unsigned();
            $table->integer('idResponsableCumplimientoMeta')->unsigned();
            $table->integer('idMedioVerificacion')->unsigned();
            $table->integer('idTipoMeta')->unsigned();
            $table->integer('idMetaAcumulada')->unsigned();
            $table->integer('idFuenteFinanciamiento')->unsigned();
            $table->string('metaPOA');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('tiempoMeses');
            $table->string('metaProgramadaAnual');
            $table->string('observacion');
            $table->foreign('idActividadMeta')->references('id')->on('actividades_metas');
            $table->foreign('idIndicador')->references('id')->on('indicadores');
            $table->foreign('idResponsableCumplimientoMeta')->references('id')->on('responsables_cumplimiento_metas');
            $table->foreign('idMedioVerificacion')->references('id')->on('medios_verificaciones');
            $table->foreign('idTipoMeta')->references('id')->on('tipo_metas');
            $table->foreign('idMetaAcumulada')->references('id')->on('meta_acumuladas');
            $table->foreign('idFuenteFinanciamiento')->references('id')->on('fuentes_financiamientos');
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
        Schema::dropIfExists('metas__p_o_as');
    }
}
