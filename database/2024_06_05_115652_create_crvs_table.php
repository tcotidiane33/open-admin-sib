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
        Schema::create('crvs', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('reference')->nullable();
            $table->string('reference')->nullable();
            $table->string('reference')->nullable();
        // UnsignedBigInteger Key == #Portefeuille #Agence #Unité Commerciale #Marché #Statut

        //foreign

            $table->integer('order_column')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crvs');
        Schema::table('crvs', function (Blueprint $table) {
            $table->dropColumn('order_column');
        });
    }
};
