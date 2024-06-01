<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Clients')->nullable();
            $table->string('Ressources')->nullable();
            $table->string('Descriptions')->nullable();
            $table->string('Amount_mobilisable')->nullable();
            $table->string('Eps_mobilisable')->nullable();
            $table->string('Probably')->nullable();
            $table->string('Details_etapes_transactionss')->nullable();
            $table->string('Support_requis_levier')->nullable();
            $table->string('Mobilisation')->nullable();
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
        Schema::dropIfExists('Dip');
    }
}
