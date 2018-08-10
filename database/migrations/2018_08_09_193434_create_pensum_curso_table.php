<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensumCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensum_curso', function (Blueprint $table) {
            $table->integer('codigo_pensum')->unsigned();
            $table->foreign('codigo_pensum')->references('codigo_pensum')->on('pensum'); 
            $table->integer('codigo_curso')->unsigned();
            $table->foreign('codigo_curso')->references('codigo_curso')->on('curso'); 
            $table->primary(['codigo_pensum', 'codigo_curso']);
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
        Schema::dropIfExists('pensum_curso');
    }
}
