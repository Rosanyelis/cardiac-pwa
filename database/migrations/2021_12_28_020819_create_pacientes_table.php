<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('f_ingreso');
            $table->string('n_historia', 10);
            $table->string('cedula')->nullable();
            $table->string('nombres'); // TODO: Preguntar si lo mantengo como texo o como json
            $table->date('f_nacimiento')->nullable();
            $table->string('edad')->nullable();
            $table->string('telefono')->nullable();
            $table->string('profesion')->nullable();
            $table->string('direccion')->nullable();
            $table->string('referido')->nullable();
            $table->string('tipo_consulta')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
