<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            
            $table->bigIncrements('id');
		
            $table->unsignedBigInteger('from')->nullable();
            
            $table->foreign('from')->references('id')->on('users')->onDelete('cascade')->nullable();

            $table->unsignedBigInteger('to')->nullable();
            
            $table->foreign('to')->references('id')->on('users')->onDelete('cascade')->nullable();

           $table->unsignedBigInteger('annonce_id')->nullable();
           $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade')->nullable();
            $table->text('text')->nullable();
            $table->string('read')->default('0');
            
           
            $table->string('nameContact');

            
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
        Schema::dropIfExists('messages');
    }
}
