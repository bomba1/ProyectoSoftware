<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajoTitulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajo_titulacions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('actividad_titulacion_id')->unsigned();
            $table->foreign('actividad_titulacion_id')->references('id')->on('tipo_actividads')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->bigInteger('comision_id')->unsigned();
            $table->foreign('comision_id')->references('id')->on('comisions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('nombre',128);
            $table->enum('semestreInsc',['1','2']);
            $table->integer('añoInsc')->unsigned();
            $table->date('FechaInicio')->nullable();
            $table->date('FechaTermino')->nullable();
            $table->enum('estado',['INGRESADA','ACEPTADA','FINALIZADA','ANULADA']);
            

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
        Schema::dropIfExists('trabajo_titulacions');
    }
}
