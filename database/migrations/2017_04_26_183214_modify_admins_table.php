<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('adminContact')->unique();
            $table->string('adminFax');
            $table->string('adminAddress');
            $table->string('adminInstitution');
            $table->string('adminRole');
            $table->string('adminProgram');
            $table->dropColumn('job_title');
            $table->dropColumn('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('job_title');
            $table->boolean('admin');
        });
    }
}
