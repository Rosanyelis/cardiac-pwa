<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformeMedicoMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_medico_medicamentos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('informe_medico_id')->nullable();
            $table->uuid('medicamento_id')->nullable();
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('informe_medico_id')
                ->references('id')
                ->on('informe_medicos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('medicamento_id')
                ->references('id')
                ->on('medicamentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informe_medico_medicamentos');
    }
}
