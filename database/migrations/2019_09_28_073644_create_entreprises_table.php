<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            
            $table->bigIncrements('id');
             //service
             $table->unsignedBigInteger('user_id');
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             
            
             
 
            

            $table->string('descri_ser_entreprise')->nullable();
            $table->string('nom_entreprise')->nullable();
			 $table->string('zone_intervention')->nullable();

            $table->string('photo_entreprise')->default('ent.png');
            $table->string('nb_annee_exp_entreprise')->nullable();
            $table->string('local_entreprise')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
          
            $table->string('desponobilite_entreprise')->nullable();

            $table->string('nomCélébrité')->nullable();
       
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
        Schema::dropIfExists('entreprises');
    }
}
