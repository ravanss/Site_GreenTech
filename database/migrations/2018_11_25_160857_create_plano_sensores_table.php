<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoSensoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_sensores', function (Blueprint $table) {
            $table->increments('cd_plano_sensores');
            $table->string('nm_plano_sensores', 45);
            $table->decimal('vl_plano_sensores', 5,2);
            $table->integer('fk_umidade_solo');
            $table->foreign('fk_umidade_solo')->references('cd_umidade_solo')->on('umidade_solo');
            $table->integer('fk_chuva');
            $table->foreign('fk_chuva')->references('cd_chuva')->on('chuva');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planos');
    }
}
