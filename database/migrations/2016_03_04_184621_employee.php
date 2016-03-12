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
            $table->integer('employee_user')->unsigned()->default(0);
            $table->foreign('employee_user')->references('id')->on('users');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->primary('email');
            $table->string('password', 60);
            $table->string('company_name')->default('');
            $table->string('company_type');
            $table->string('mobile');
            $table->date('founded');
            $table->string('brief_description');
            $table->string('full_description');
            $table->string('size');
            $table->string('industry');
            

            $table->timestamps();
        });
    
            Schema::create('emp_address', function (Blueprint $table) {
             $table->increments('id');
            $table->string('email');
            $table->foreign('email')->references('email')->on('Employee_account_info');
            $table->string('Address_line1');
            $table->string('Address_line2');
            $table->string('city');
            $table->string('country');
            $table->string('pincode');
            $table->string('status');
        });
                    
                     Schema::create('internship', function (Blueprint $table) {
            $table->increments('id');
              $table->string('email');
            $table->foreign('email')->references('email')->on('Employee_account_info');
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
        Schema::create('emp_links', function (Blueprint $table) {
             $table->string('email');
             $table->increments('id');
            $table->foreign('email')->references('email')->on('Employee_account_info');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('behence');
            $table->string('blog');
            $table->string('website');
            $table->string('status');
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
