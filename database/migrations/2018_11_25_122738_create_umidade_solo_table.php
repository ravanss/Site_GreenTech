<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmidadeSoloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umidade_solo', function (Blueprint $table) {
            $table->increments('cd_umidade_solo', 6);
            $table->string('nr_umidade_solo', 4);
            $table->timestamp('dt_umidade_solo');
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
        Schema::dropIfExists('umidade_solo');
    }
}
