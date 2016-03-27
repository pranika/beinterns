<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jobseeker extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('visa_status');
            $table->string('gender')->default('');
            $table->string('mobile')->default('');
            $table->string('status')->default('');
            $table->string('country');
            $table->string('city');
            $table->string('description');
            $table->string('photo_path');
            $table->timestamps();
        });
        Schema::create('education', function (Blueprint $table) {
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('degree_type');
            $table->string('university_name');
            $table->string('degree_level');
            $table->string('major');
            $table->string('minor');
            $table->decimal('gpa_four');
            $table->decimal('gpa_ten');
            $table->decimal('percentage');
            $table->date('completion_date');
            $table->string('specialisation');
            $table->string('description');
        });

        Schema::create('technical', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('skill_1');
            $table->string('skill_2');
            $table->string('skill_3');
            $table->string('skill_4');
            $table->string('skill_5');
            $table->string('status');
        });

        Schema::create('non_technical', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('skill_1');
            $table->string('skill_2');
            $table->string('skill_3');
            $table->string('skill_4');
            $table->string('skill_5');


            $table->string('status');
        });
        Schema::create('others', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('skillset');
            $table->integer('proficiency_level');
            $table->string('category');
            $table->string('subcategory');
            $table->string('status');
        });
        Schema::create('technical_pref', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('category')->default('');
            $table->string('subcategory')->default('');
            $table->string('technology')->default('');
            $table->integer('duration')->default(0);
            $table->boolean('location');
            $table->integer('stipend')->default(0);
            $table->string('perferred_type')->default('');
        });

        Schema::create('non_tech_pref', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('category')->default('');
            $table->string('subcategory')->default('');
            $table->string('technology')->default('');
            $table->integer('duration')->default(0);
            $table->boolean('location');
            $table->integer('stipend')->default(0);
            $table->string('perferred_type')->default('');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
        Schema::create('other_pref', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('category')->default('');
            $table->string('subcategory')->default('');
            $table->string('technology')->default('');
            $table->integer('duration')->default(0);
            $table->boolean('location');
            $table->integer('stipend')->default(0);
            $table->string('perferred_type')->default('');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        Schema::create('certification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('certificate_name')->default('');
            $table->string('institution')->default('');
            $table->integer('serial_no')->default(0);
            $table->date('start_date');
            $table->string('lifetime_validity');
            $table->date('end_date');
            $table->string('description')->default('');
            $table->string('status')->default('');
        });

        Schema::create('intern_internship', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('title');
            $table->string('company_name');
            $table->string('description');
            $table->string('location');
            $table->date('start_date');
            $table->date('end_date');
        });
        Schema::create('volunteer_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('description');
            $table->date('start_date');
        });
        Schema::create('accomplishment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('description');
            $table->date('start_date');
        });

        Schema::create('training', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('title');
            $table->string('organisation');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
        });

        Schema::create('participation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('description');
            $table->date('start_date');
        });
        Schema::create('links', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('linkedin');
            $table->string('behance');
            $table->string('blog');
            $table->string('website1');
            $table->string('website2');
            $table->string('status');
        });
        Schema::create('documents', function (Blueprint $table) {
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('document');
        });
        Schema::create('languages', function (Blueprint $table) {
            $table->integer('jobseeker_user')->unsigned()->default(0);
            $table->foreign('jobseeker_user')->references('id')->on('users');
            $table->string('languages');
            $table->string('read');
            $table->string('write');
            $table->string('speak');
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
