<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->string('nbr_annonce');
            $table->string('description');
            $table->string('titre');
            $table->string('date_debut');
            $table->string('date_fin');
            
            $table->string('validation_pack')->default('Activer');
           
            $table->string('prix');

            
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
        Schema::dropIfExists('packs');
    }
}
