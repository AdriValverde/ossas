<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosis', function (Blueprint $table) {
            $table->increments('id');
            $table->number('unidades');
            $table->string('frecuencia');
            $table->string('instrucciones');
            $table->timestamps();

            $table->foreign('medicamentos_id')->references('id')->on('medicamentos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
