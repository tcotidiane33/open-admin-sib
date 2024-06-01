<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ressources', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_start')->nullable();
            $table->decimal('amount_start', 15, 2)->nullable();
            $table->date('date_end')->nullable();
            $table->decimal('amount_end', 15, 2)->nullable();;
            $table->float('Variations')->nullable();
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
        Schema::dropIfExists('Ressources');
    }
}
