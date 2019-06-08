<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTrabajoTitulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_trabajo_titulacion', function (Blueprint $table) {
            $table->bigIncrements('id'); 

            $table->bigInteger('estudiante_id')->unsigned();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade')
                ->onUpdate('cascade');   
                
            $table->bigInteger('trabajo_titulacion_id')->unsigned();
            $table->foreign('trabajo_titulacion_id')->references('id')->on('trabajo_titulacions')
                ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('estudiante_trabajo');
    }
}
