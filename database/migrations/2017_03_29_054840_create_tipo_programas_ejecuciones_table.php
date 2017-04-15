<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoProgramasEjecucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_programas_ejecuciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoProgramacionEjecucion');
            $table->decimal('valor');
            $table->integer('totalMetaProgramada');
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
        Schema::dropIfExists('tipo_programas_ejecuciones');
    }
}
