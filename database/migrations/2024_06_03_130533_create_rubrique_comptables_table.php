<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rubrique_comptables', function (Blueprint $table) {
            $table->id();
            $table->text('Rubrique');
            $table->integer('NumeroChapComp');
            $table->longText('LibelleChapComp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rubrique_comptables');
    }
};
