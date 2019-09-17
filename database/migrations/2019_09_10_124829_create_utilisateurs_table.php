<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email');
            $table->string('date_naissance')->nullable();
            $table->string('adresse')->nullable();
            $table->string('pays')->nullable();
            $table->string('codePostal')->nullable();
            $table->string('devise')->nullable();
            $table->string('montantCompte')->nullable();
            $table->string('password');
            $table->string('isAdmin');
            $table->string('percent')->nullable();
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
        Schema::dropIfExists('utilisateurs');
    }
}
