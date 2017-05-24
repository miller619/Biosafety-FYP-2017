<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTypeAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_type_as', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('material_type');
            $table->string('item_name');
            $table->string('risk_level');
            $table->string('quantity');
            $table->string('volume');

            $table->integer('notification_id')->unsigned();            
            $table->foreign('notification_id')->references('id')->on('notifications')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('notification_type_as');
    }
}
