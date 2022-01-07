<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('historia_clinica_id')->nullable();
            $table->string('hb')->nullable();
            $table->string('htco')->nullable();
            $table->string('plaquetas')->nullable();
            $table->string('cta')->nullable();
            $table->string('seg')->nullable();
            $table->string('glicemia')->nullable();
            $table->string('hba1')->nullable();
            $table->string('urea')->nullable();
            $table->string('creatinina')->nullable();
            $table->string('acido_urico')->nullable();
            $table->string('colesterol')->nullable();
            $table->string('triglicerios')->nullable();
            $table->string('ldl_c')->nullable();
            $table->string('hdl_c')->nullable();
            $table->string('tgo')->nullable();
            $table->string('tgp')->nullable();
            $table->string('sodio')->nullable();
            $table->string('potasio')->nullable();
            $table->string('magnesio')->nullable();
            $table->string('calcio')->nullable();
            $table->string('fosforo')->nullable();
            $table->string('ck_total')->nullable();
            $table->string('ck_mb')->nullable();
            $table->string('troponina')->nullable();
            $table->string('ldh')->nullable();
            $table->string('bnp')->nullable();
            $table->text('otros_laboratorios')->nullable();
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
        Schema::dropIfExists('laboratorios');
    }
}
