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
        Schema::create('Employee_account_info', function (Blueprint $table) {
            $table->string('first_name');
            $table->integer('employer_user')->unsigned()->default(0);
            $table->foreign('employer_user')->references('id')->on('users');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->primary('email');
            $table->string('password', 60);
            $table->string('company_name')->default('');
            $table->string('company_email')->default('');
            $table->date('start_date_of_company');
            $table->string('description')->default('');
            $table->integer('size')->default(0);
            $table->string('industry_type')->default('');
            $table->string('mobile')->default('');

            $table->timestamps();
        });
    
           Schema::create('intern_account_info', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->primary('email');
            $table->string('password', 60);
            $table->string('gender');
            $table->string('mobile');
            $table->string('status');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
