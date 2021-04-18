<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('id_car');
            $table->string('btn_empty')->nullable();
            $table->string('btn_filled')->nullable();
            $table->string('btn_loading')->nullable();
            $table->string('btn_trash')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('xgyro')->nullable();
            $table->string('ygyro')->nullable();
            $table->string('speed')->nullable();
            $table->string('temp')->nullable();
            $table->string('cycle');
            $table->timestamps();
        });
    }
    // tombol berangkat kosong,
    // tombol berangkat isi, 
    // tombol sampai pos loading kosong,
    //  tombol sampai pos buang isi,
    // longitude,latitude,
    // xgyro,ygyro,
    // temperature
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
