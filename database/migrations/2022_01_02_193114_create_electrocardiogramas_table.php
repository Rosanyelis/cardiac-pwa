<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectrocardiogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrocardiogramas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('historia_clinica_id')->nullable();
            $table->string('ritmo')->nullable();
            $table->string('fc')->nullable();
            $table->string('pr')->nullable();
            $table->string('qrs')->nullable();
            $table->string('qt')->nullable();
            $table->string('qtc')->nullable();
            $table->string('aqrs')->nullable();
            $table->text('trazo')->nullable();
            $table->text('rx_torax_pa')->nullable();
            $table->text('ecocardiograma')->nullable();
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
        Schema::dropIfExists('electrocardiogramas');
    }
}
