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
            $table->string('numeroConselho');
            $table->string('cid');
            $table->integer('id_anexos')->unsigned();
            $table->foreign('id_anexos')->references('id')->on('anexos');
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
