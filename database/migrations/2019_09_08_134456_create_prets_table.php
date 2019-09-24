<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_naissance');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('ville');
            $table->string('region')->nullable();
            $table->string('pays');
            $table->string('codePostal')->nullable();
            $table->string('montantPret');
            $table->string('devise');
            $table->string('rolePret')->nullable();
            $table->string('revenuAnnuel');
            $table->string('deviseRevenu');
            $table->string('nousConnaitre')->nullable();
            $table->string('statutProfessionnel');
            $table->string('email');
            $table->string('idCard')->nullable();
            $table->string('codeBancaire');
            $table->string('delaiRemboursement');
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
        Schema::dropIfExists('prets');
    }
}
