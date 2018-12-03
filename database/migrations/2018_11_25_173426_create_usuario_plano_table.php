<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioPlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_plano', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_usuario');
            $table->foreign('fk_usuario')->references('id')->on('users');
            $table->integer('fk_plano');
            $table->foreign('fk_plano')->references('cd_plano_sensores')->on('plano_sensores');
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
        Schema::dropIfExists('usuario_plano');
    }
}
