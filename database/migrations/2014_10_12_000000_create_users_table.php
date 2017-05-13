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

            $table->string('name');
            $table->string('email')->unique();
            $table->string('userContact')->unique()->nullable();
            $table->string('userFax')->nullable();
            $table->string('userAddress')->nullable();

            $table->string('userInstitution')->nullable();
            $table->string('userInstitutionID')->nullable();

            $table->string('userDesignation')->nullable();
            $table->string('userFaculty')->nullable();


            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
