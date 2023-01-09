<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResrvationPaAnnClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resrvation_pa_ann_clients', function (Blueprint $table) {
         
           

            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id')->nullable();
            
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade')->nullable();

            $table->unsignedBigInteger('depanneur_id')->nullable();
            
            $table->foreign('depanneur_id')->references('id')->on('users')->onDelete('cascade')->nullable();

            $table->unsignedBigInteger('annonce_id')->nullable();
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade')->nullable();
            $table->string('message');
            $table->string('read')->default('0');
            
            $table->string('nameContact')->nullable();
           
            $table->string('messagerie');

            $table->string('telephone2')->nullable();
            $table->string('prix_propose_par_depanneur')->nullable();
            $table->string('validation_contact')->default('Non Terminer');
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
        Schema::dropIfExists('resrvation_pa_ann_clients');
    }
}
