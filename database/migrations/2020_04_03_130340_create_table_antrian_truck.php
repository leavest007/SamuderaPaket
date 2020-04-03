<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAntrianTruck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antriantruck', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('truck');
            $table->string('nama_supir');
            $table->string('no_telpon_supir');
            $table->string('kernet');
            $table->string('no_telpon_kernet');
            $table->integer('cabang');
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
        Schema::dropIfExists('antriantruck');
    }
}
