<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivosPNBVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos_p_n_b_vs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ObjetivoPNBV');
            $table->integer('idObjetivoEstrategicoInstitucional')->unsigned();
            $table->string('descripcion');
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
        Schema::dropIfExists('objetivos_p_n_b_vs');
    }
}
