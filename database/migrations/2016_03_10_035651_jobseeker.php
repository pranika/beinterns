<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jobseeker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('account_info', function (Blueprint $table) {
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->primary('email');
            $table->string('password', 60);
            $table->string('gender')->default('');
            $table->string('mobile')->default('');
            $table->string('status')->default('');
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
        //
    }
}
