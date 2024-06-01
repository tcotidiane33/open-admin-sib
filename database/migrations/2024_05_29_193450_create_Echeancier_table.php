<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcheancierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Echeancier', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('FDC')->nullable();
            $table->string('CE')->nullable();
            $table->string('Social_reasons')->nullable();
            $table->date('Echeancier_admin')->nullable();
            $table->date('Prorogation_par_ap')->nullable();
            $table->date('Situation_par_date')->nullable();
            $table->string('Observations')->nullable();
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
        Schema::dropIfExists('Echeancier');
    }
}
