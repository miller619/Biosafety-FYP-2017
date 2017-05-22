<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEDForm1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_d_form1s', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Title');
            $table->string('Project_summary');
            $table->string('Possible_hazards');
            $table->string('Building_No');
            $table->string('Room_No');
            $table->string('Containment_No');
            $table->string('Certificate_No');

            $table->boolean('Awareness')->nullable()->default(0);
            $table->string('name_of_officer');
            $table->string('name_lab_mngr');
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
        Schema::dropIfExists('e_d_form1s');
    }
}
