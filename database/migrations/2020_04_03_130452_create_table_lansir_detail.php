<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLansirDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lansirdetail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stt');
            $table->integer('lansir');
            $table->string('nama_penerima')->nullable();
            $table->string('no_penerima')->nullable();
            $table->integer('status');
            $table->text('keterangan');
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
        Schema::dropIfExists('lansirdetail');
    }
}
