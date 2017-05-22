<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEDFormB4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_d_form_b4s', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('one')  ->nullable()->default(0);
            $table->boolean('two')  ->nullable()->default(0);
            $table->boolean('three')->nullable()->default(0);
            $table->boolean('four') ->nullable()->default(0);
            $table->boolean('five') ->nullable()->default(0);

            $table->integer('ed_form_id')->unsigned();            
            $table->foreign('ed_form_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('e_d_form_b4s');
    }
}
