<?php

use App\Models\Segment;
use App\Models\Unitcommercial;
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
        Schema::create('affectation_portefeuilles', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->unsignedBigInteger('unitcommercial_id');
            $table->unsignedBigInteger('segment_id');
            $table->timestamps();

            $table->foreign('unitcommercial_id')->references('id')->on('unitcommercials')->onDelete('cascade');
            $table->foreign('segment_id')->references('id')->on('segments')->onDelete('cascade');
        });
        // Schema::create('portefeuille_uc', function(Blueprint $table){
        //     $table->foreignIdFor(Unitcommercial::class)->constrained()->cascadeOnDelete();
        //     $table->primary(['']);
        // });
        // Schema::create('portefeuille_seg', function(Blueprint $table){
        //     $table->foreignIdFor(Segment::class)->constrained()->cascadeOnDelete();
        //     $table->primary(['']);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectation_portefeuilles');
    }
};
