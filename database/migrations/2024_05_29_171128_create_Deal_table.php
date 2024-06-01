<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Deal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relation')->nullable();
            $table->string('type')->nullable();
            $table->string('crvs')->nullable();
            $table->string('indice')->nullable();
            $table->string('social_reasons')->nullable();
            $table->string('amount')->nullable();
            $table->string('estimate_date_realisation')->nullable();
            $table->integer('probably_indice')->nullable();
            $table->string('probably')->nullable();
            $table->string('etapes')->nullable();
            $table->string('status')->nullable();
            $table->string('actions')->nullable();
            $table->string('commentaires')->nullable();
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
        Schema::dropIfExists('Deal');
    }
}
