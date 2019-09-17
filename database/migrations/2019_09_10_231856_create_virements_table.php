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
            $table->string('iban')->nullable();
            $table->string('bicswift')->nullable();
            $table->string('nameBanque')->nullable();
            $table->string('montant')->nullable();
            $table->string('devise')->nullable();
            $table->string('code1')->nullable();
            $table->string('code2')->nullable();
            $table->string('code3')->nullable();
            $table->string('percent')->nullable();
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
