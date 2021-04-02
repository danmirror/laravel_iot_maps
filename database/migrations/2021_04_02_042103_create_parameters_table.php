<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('xmina');
            $table->string('xminb');
            $table->string('xminc');
            $table->string('xmaxa');
            $table->string('xmaxb');
            $table->string('xmaxc');
            $table->string('speeda');
            $table->string('speedb');
            $table->string('speedc');
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
        Schema::dropIfExists('parameters');
    }
}
