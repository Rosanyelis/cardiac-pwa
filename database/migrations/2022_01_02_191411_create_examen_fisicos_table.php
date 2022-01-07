<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_fisicos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('historia_clinica_id')->nullable();
            $table->string('ta')->nullable();
            $table->string('fc')->nullable();
            $table->string('fr')->nullable();
            $table->string('peso')->nullable();
            $table->string('talla')->nullable();
            $table->text('signo_positivo')->nullable();
            $table->timestamps();

            $table->foreign('historia_clinica_id')
                ->references('id')
                ->on('historia_clinicas')
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
        Schema::dropIfExists('examen_fisicos');
    }
}
