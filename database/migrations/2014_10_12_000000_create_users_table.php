<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('active')->default('0');
            $table->string('token')->nullable();
            $table->string('email')->unique();
            $table->string('login');
            $table->string('password');
            $table->string('token_pwd')->nullable();

            $table->string('ville')->nullable();
            $table->string('code_postal')->nullable();
            
            $table->string('code')->nullable();
            $table->string('gratuit')->nullable();

            
            

             //profile
             $table->string('photo')->default('user.png');
             $table->string('nom')->nullable();
          
             $table->string('StatuPack1')->default('0');
             $table->string('read')->default('0');

             
             $table->string('telephone')->unique();
             $table->string('adresse')->nullable();
             $table->string('age')->nullable();
			 //new
	
             $table->string('genre')->nullable();
        
             //map
           
             $table->float('latitude');
             $table->float('longitude');
            
			
            
            $table->rememberToken();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
