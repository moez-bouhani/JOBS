<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_entreprises', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->string('cinRectoVerso')->nullable();
            $table->string('diplome')->nullable();

            $table->string('registreCommerce')->nullable();
            $table->string('tenueTravail')->nullable();

            $table->string('attestation')->nullable();
            $table->string('patente')->nullable();


           
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
        Schema::dropIfExists('images_entreprises');
    }
}
