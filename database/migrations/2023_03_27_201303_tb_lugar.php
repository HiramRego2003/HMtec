<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbLugar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lugar', function (Blueprint $table) {
            $table->bigIncrements('id_lugar');
            $table->string('nombre', 50);
            $table->string('direccion', 50);
            $table->Integer('id_estado');
            $table->Integer('id_municipio');
            $table->Integer('id_sensor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_lugar');
    }
}
