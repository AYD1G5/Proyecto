<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostrequisitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postrequisito', function (Blueprint $table) {
            $table->integer('codigo_curso')->unsigned();
            $table->foreign('codigo_curso')->references('codigo_curso')->on('curso');
            $table->integer('codigo_postrequisito')->unsigned();
            $table->foreign('codigo_postrequisito')->references('codigo_curso')->on('curso');
            $table->primary(['codigo_curso', 'codigo_postrequisito']);
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
        Schema::dropIfExists('postrequisito');
    }
}
