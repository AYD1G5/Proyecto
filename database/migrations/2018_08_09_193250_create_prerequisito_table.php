<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrerequisitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prerequisito', function (Blueprint $table) {
            $table->integer('codigo_curso')->unsigned();
            $table->foreign('codigo_curso')->references('codigo_curso')->on('curso');
            $table->integer('codigo_prerequisito')->unsigned();
            $table->foreign('codigo_prerequisito')->references('codigo_curso')->on('curso');
            $table->primary(['codigo_curso', 'codigo_prerequisito']);
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
        Schema::dropIfExists('prerequisito');
    }
}
