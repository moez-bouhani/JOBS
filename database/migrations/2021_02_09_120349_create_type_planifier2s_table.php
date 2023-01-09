<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypePlanifier2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_planifier2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_planifier1s_id');
            
            $table->foreign('type_planifier1s_id')->references('id')->on('type_planifier1s')->onDelete('cascade');

            $table->string('nom')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('type_planifier2s');
    }
}
