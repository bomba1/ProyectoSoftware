<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoComisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('academico_comision', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('comision_id')->unsigned();
            $table->foreign('comision_id')->references('id')->on('comisions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('academico_id')->unsigned();
            $table->foreign('academico_id')->references('id')->on('academicos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
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
        Schema::dropIfExists('academico_comision');
    }
}
