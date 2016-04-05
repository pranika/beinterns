<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Preference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_user')->unsigned()->default(0);
            $table->foreign('student_user')->references('id')->on('users');
            $table->string('category')->default('');
            $table->string('internship_type')->default('');
            $table->string('location');
            $table->string('stipend');
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
