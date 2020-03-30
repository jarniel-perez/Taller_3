<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentoPacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamento_paciente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('paciente_id')->unsigned();
            $table->bigInteger('medicamento_id')->unsigned();

            $table->foreign('paciente_id')
                  ->references('id')
                  ->on('pacientes');

            $table->foreign('medicamento_id')
                  ->references('id')
                  ->on('medicamentos');

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
        Schema::dropIfExists('medicamento_paciente');
    }
}
