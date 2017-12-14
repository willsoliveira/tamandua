<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAtestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atestados', function (Blueprint $table) {
            $table->date('data_pericia')->nullable();
            $table->time('horario_pericia')->nullable();
            $table->string('local_pericia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atestados', function (Blueprint $table) {
            $table->dropColumn('data_pericia');
            $table->dropColumn('horario_pericia');
            $table->dropColumn('local_pericia');
        });
    }
}
