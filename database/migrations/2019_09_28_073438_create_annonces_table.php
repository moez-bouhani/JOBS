<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
                 
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('titre');
            $table->string('description')->nullable();
            $table->string('categorie')->nullable();
            $table->string('categorie_id')->nullable();
            $table->string('date_intervention')->nullable();
            $table->string('lieux')->nullable();
            
              //map
           
             $table->float('latitude');
             $table->float('longitude');
           


            // $table->string('uuid',64)->nullable();
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
        Schema::dropIfExists('annonces');
    }
}
