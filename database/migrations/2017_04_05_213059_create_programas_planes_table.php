<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasPlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas_planes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('programaPlan');
            $table->integer('idPlanOperativo')->unsigned();
            $table->foreign('idPlanOperativo')->references('id')->on('plan_operativos');
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
        Schema::dropIfExists('programas_planes');
    }
}
