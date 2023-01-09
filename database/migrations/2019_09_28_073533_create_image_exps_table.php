<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_exps', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('experience_id')->nullable();
            
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('image_exps');
    }
}
