<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMedicamentoToTratamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tratamientos', function (Blueprint $table) {
            $table->unsignedInteger('medicamento_id');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tratamientos', function (Blueprint $table) {
            $table->dropForeign('tratamientos_medicamento_id_foreign');
        });
    }
}
