<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubriqueCompTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rubrique_Comp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Rubrique')->nullable();
            $table->string('Num_chap_comp')->nullable();
            $table->string('Libelle_chap_comp')->nullable();
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
        Schema::dropIfExists('Rubrique_Comp');
    }
}
