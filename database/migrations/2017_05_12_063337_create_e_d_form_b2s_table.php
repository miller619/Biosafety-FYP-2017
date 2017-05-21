<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEDFormB2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_d_form_b2s', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('current_qualification');
            $table->string('department');
            $table->string('p_address');
            $table->string('tele');
            $table->string('fax');
            $table->string('email_address');
            
            $table->integer('ed_form_id')->unsigned();            
            $table->foreign('ed_form_id')->references('id')->on('e_d_form1s');

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
        Schema::dropIfExists('e_d_form_b2s');
    }
}
