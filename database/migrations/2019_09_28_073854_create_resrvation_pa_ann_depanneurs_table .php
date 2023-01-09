<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResrvationPaAnnDepanneursTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resrvation_pa_ann_depanneurs', function (Blueprint $table) {
          
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();


            $table->unsignedBigInteger('annonce_id')->nullable();
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade')->nullable();


            $table->unsignedBigInteger('depanneur_id')->nullable();
            $table->foreign('depanneur_id')->references('id')->on('users')->onDelete('cascade')->nullable();


            $table->unsignedBigInteger('message_id')->nullable();
            
            $table->foreign('message_id')->references('id')->on('resrvation_pa_ann_clients')->onDelete('cascade')->nullable();
            
            
            $table->string('message');
            $table->string('read')->default('0');
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
        Schema::dropIfExists('resrvation_pa_ann_depanneurs');
    }
}
