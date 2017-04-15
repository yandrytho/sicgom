<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivoEstrategicosSempladesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivo_estrategicos_semplades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPoliticaInstitucional')->unsigned();
            $table->integer('idProgramaPlan')->unsigned();
            $table->integer('idResponsableEstrategico')->unsigned();
            $table->integer('idObjetivoPNBV')->unsigned();
            $table->integer('idObjetivoEstrategicoInstitucional')->unsigned();
            $table->string('objetivoEstrategicoSemplade')->unsigned();
            $table->foreign('idPoliticaInstitucional')->references('id')->on('politicas_institucionales');
            $table->foreign('idProgramaPlan')->references('id')->on('programas_planes');
            $table->foreign('idResponsableEstrategico')->references('id')->on('responsables_estrategicos');
            $table->foreign('idObjetivoPNBV')->references('id')->on('objetivos_p_n_b_vs');
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
        Schema::dropIfExists('objetivo_estrategicos_semplades');
    }
}
