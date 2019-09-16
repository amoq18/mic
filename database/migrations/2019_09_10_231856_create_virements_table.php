<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iban');
            $table->string('bicswift');
            $table->string('nameBanque');
            $table->string('montant');
            $table->string('code');
            $table->string('devise');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('utilisateurs');
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
        Schema::dropIfExists('virements');
    }
}
