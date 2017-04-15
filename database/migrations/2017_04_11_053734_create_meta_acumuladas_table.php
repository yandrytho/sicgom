<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaAcumuladasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_acumuladas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idIndicador')->unsigned();
            $table->integer('idObjetivoEstrategicoInstitucional')->unsigned();
            $table->string('metaAcumulada');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->foreign('idIndicador')->references('id')->on('indicadores');
            $table->foreign('idObjetivoEstrategicoInstitucional')->references('id')->on('objetivos_estrategicos_institucionales');
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
        Schema::dropIfExists('meta_acumuladas');
    }
}
