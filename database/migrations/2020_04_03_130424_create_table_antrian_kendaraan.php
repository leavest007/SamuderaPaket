<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAntrianKendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antriankendaraan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kendaraan');
            $table->integer('nama_supir');
            $table->integer('nama_kernet');
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
        Schema::dropIfExists('antriankendaraan');
    }
}
