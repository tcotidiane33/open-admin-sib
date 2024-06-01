<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Production', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OBJ_annuel')->nullable();
            $table->string('TRO_annuel')->nullable();
            $table->integer('PME')->nullable();
            $table->integer('GE')->nullable();
            $table->integer('Courant')->nullable();
            $table->string('Sibnet')->nullable();
            $table->integer('Corp_privilege')->nullable();
            $table->integer('Corp_elite')->nullable();
            $table->integer('Realise')->nullable();
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
        Schema::dropIfExists('Production');
    }
}
