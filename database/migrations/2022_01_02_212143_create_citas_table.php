<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('fecha');
            $table->boolean('asistio')->nullable();
            $table->uuid('paciente_id')->nullable();
            $table->uuid('tipo_consulta_id')->nullable();
            $table->uuid('referido_id')->nullable();
            $table->timestamps();

            $table->foreign('paciente_id')
                  ->references('id')
                  ->on('referidos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('tipo_consulta_id')
                  ->references('id')
                  ->on('tipo_consultas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('referido_id')
                  ->references('id')
                  ->on('referidos')
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
        Schema::dropIfExists('citas');
    }
}
