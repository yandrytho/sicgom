<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuentesFinanciamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuentes_financiamientos', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('idTipoFinanciamiento')->unsigned();
            $table->integer('valor');
            $table->integer('descripcion');
            $table->foreign('idTipoFinanciamiento')->references('id')->on('tipos_financiamientos');
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
        Schema::dropIfExists('fuentes_financiamientos');
    }
}
