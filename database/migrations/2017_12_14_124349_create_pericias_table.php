<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePericiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pericias', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->time('horario');
            $table->string('local');
            $table->integer('id_atestado');
            $table->foreign('id_atestado')->references('id')->on('atestados');
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
        Schema::dropIfExists('pericias');
    }
}
