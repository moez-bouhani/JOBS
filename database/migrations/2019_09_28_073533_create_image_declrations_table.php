<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageDeclrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_declrations', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->unsignedBigInteger('annonce_id')->nullable();
            
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade')->nullable();
            $table->string('url');
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
        Schema::dropIfExists('image_declrations');
    }
}
