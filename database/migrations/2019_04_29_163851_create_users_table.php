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
          $table->increments('id');
          $table->integer('droit')->default('1') ;
          $table->string('name') ;
          $table->string('first_name') ;
          $table->string('city') ;
          $table->string('cp') ;
          $table->string('password') ;
          $table->string('email') ;
          $table->integer('rang')->nullable();
          $table->rememberToken() ; 
          $table->timestamps() ;
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
