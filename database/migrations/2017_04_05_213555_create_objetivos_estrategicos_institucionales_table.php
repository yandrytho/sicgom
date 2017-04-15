<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivosEstrategicosInstitucionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos_estrategicos_institucionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPrograma')->unsigned();
            $table->integer('idResponsableEstrategico')->unsigned();
            $table->integer('idPlanOperativo')->unsigned();
            $table->integer('idPoliticaInstitucional')->unsigned();
            $table->integer('idProgramaPlan')->unsigned();
            $table->date('fechaCreacion');
            $table->date('fechaModificacion');
            $table->foreign('idPrograma')->references('id')->on('programas');
            $table->foreign('idResponsableEstrategico')->references('id')->on('responsables_estrategicos');
            $table->foreign('idPlanOperativo')->references('id')->on('plan_operativos');
            $table->foreign('idPoliticaInstitucional')->references('id')->on('politicas_institucionales');
            $table->foreign('idProgramaPlan')->references('id')->on('programas_planes');
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
        Schema::dropIfExists('objetivos_estrategicos_institucionales');
    }
}
