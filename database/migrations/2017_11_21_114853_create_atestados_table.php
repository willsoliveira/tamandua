<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atestados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_medico');
            $table->string('conselho');
            $table->string('numero_conselho');
            $table->date('data_inicio_atestado');
            $table->string('duracao_atestado');
            $table->string('cid');
            $table->string('atendente');
            $table->integer('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');
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
        Schema::dropIfExists('atestados');
    }
}
