<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('emp_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->integer('employer_user')->unsigned()->default(0);
            $table->foreign('employer_user')->references('id')->on('users');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('company_name')->default('');
            $table->string('company_type');
            $table->string('mobile');
            $table->date('founded');
            $table->string('description');
            $table->string('website');
            $table->string('size');
            $table->string('industry');
            $table->timestamps();
        });

   
        Schema::create('internship', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_user')->unsigned()->default(0);
            $table->foreign('employer_user')->references('id')->on('users');
            $table->string('title');
            $table->string('internship_description');
            $table->string('requirement');
            $table->string('category');
            $table->string('location');
            $table->date('start_date');
            $table->string('duration');
            $table->integer('stipend');
            $table->date('application_deadline');
            $table->integer('no_of_internships');
            $table->string('type_of_internship');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        Schema::create('emp_links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_user')->unsigned()->default(0);
            $table->foreign('employer_user')->references('id')->on('users');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        
    }

}
