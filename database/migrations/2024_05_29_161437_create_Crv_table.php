<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Crv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relation')->nullable();
            $table->string('visitenature')->nullable();
            $table->date('date')->nullable();
            $table->string('visiteobject')->nullable();
            $table->string('topics')->nullable();
            $table->string('reclamations')->nullable();
            $table->string('divers')->nullable();
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
        Schema::dropIfExists('Crv');
    }
}
