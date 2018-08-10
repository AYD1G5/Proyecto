<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoAsignacionTemporalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_asignacion_temporal', function (Blueprint $table) {
            $table->integer('codigo_curso')->unsigned();
            $table->foreign('codigo_curso')->references('codigo_curso')->on('curso'); 
            $table->integer('asignacion_t_id')->unsigned();
            $table->foreign('asignacion_t_id')->references('id')->on('asignacion_temporal'); 
            $table->primary(['codigo_curso', 'asignacion_t_id']);
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
        Schema::dropIfExists('curso_asignacion_temporal');
    }
}
