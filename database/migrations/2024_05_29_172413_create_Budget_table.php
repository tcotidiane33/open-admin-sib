<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Budget', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ges')->nullable();
            $table->string('Rubrique')->nullable();
            $table->string('Mois')->nullable();
            $table->string('Budget')->nullable();
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
        Schema::dropIfExists('Budget');
    }
}
