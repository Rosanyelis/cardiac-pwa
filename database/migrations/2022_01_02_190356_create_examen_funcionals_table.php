<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenFuncionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_funcionals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('historia_clinica_id')->nullable();
            $table->boolean('disnea')->nullable();
            $table->boolean('angina')->nullable();
            $table->boolean('palpitaciones')->nullable();
            $table->boolean('edema')->nullable();
            $table->boolean('presincope')->nullable();
            $table->boolean('sincope')->nullable();
            $table->boolean('vertigos')->nullable();
            $table->text('otros_funcionales')->nullable();
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
        Schema::dropIfExists('examen_funcionals');
    }
}
