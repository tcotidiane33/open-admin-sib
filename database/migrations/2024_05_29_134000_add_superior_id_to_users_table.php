<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSuperiorIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('superior_id')->nullable()->after('id'); // Assurez-vous que 'id' est la colonne après laquelle vous voulez ajouter cette nouvelle colonne

            // Optionnel : Ajouter une contrainte de clé étrangère
            $table->foreign('superior_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['superior_id']);
            $table->dropColumn('superior_id');
        });
    }
}
