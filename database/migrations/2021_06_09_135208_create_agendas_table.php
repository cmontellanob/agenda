<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',40);
            $table->string('apellidos',40);
            $table->string('sexo',1)->default('F');
            $table->string('celular',30);
            $table->string('direccion',150);
            $table->unsignedBigInteger('idprofesion')->nullable();
            $table->timestamps();
            $table->foreign('idprofesion')->references('id')->on('profesiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
