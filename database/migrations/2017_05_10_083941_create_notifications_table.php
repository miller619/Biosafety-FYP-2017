<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');

            $table->string('unit_code')->nullable();
            $table->string('unit_title')->nullable();
            $table->string('project_code')->nullable();
            $table->string('project_title')->nullable();
            $table->string('storage_location');
            $table->string('keeper_name');
            $table->integer('approved')->default(0);
            $table->integer('user_id')->unsigned();            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('notifications');
    }
}
