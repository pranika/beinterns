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
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('visa_status');
            $table->string('gender')->default('');
            $table->string('mobile')->default('');
            $table->string('status')->default('');
            $table->timestamps();
        });
           Schema::create('education', function (Blueprint $table) {
             $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
             $table->string('degree_type');
               $table->string('university_name');
               $table->string('degree_level');
               $table->string('major');
               $table->decimal('gpa_four');
               $table->decimal('gpa_ten');
               $table->decimal('percentage');
                $table->date('start_date');
                $table->date('end_date');
                $table->string('specialisation');
                $table->string('description');
        });

    Schema::create('engineering', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('skillset');
            $table->integer('proficiency_level');
            $table->string('category');
            $table->string('subcategory');
            $table->string('status');
        });

        Schema::create('management', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('skillset');
            $table->integer('proficiency_level');
            $table->string('category');
            $table->string('subcategory');
            $table->string('status');
        });
          Schema::create('others', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('skillset');
            $table->integer('proficiency_level');
            $table->string('category');
            $table->string('subcategory'); 
            $table->string('status');
        });
          Schema::create('engineering_pref', function (Blueprint $table) {
            $table->increments('id');
             $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('category')->default('');
            $table->string('subcategory')->default('');
            $table->string('technology')->default('');
            $table->integer('duration')->default(0);
            $table->boolean('location');
            $table->integer('stipend')->default(0);
            $table->string('perferred_type')->default('');
          
           
        });

          Schema::create('management_pref', function (Blueprint $table) {
            $table->increments('id');
             $table->string('email');

            $table->foreign('email')->references('email')->on('account_info');
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
             $table->string('email');
          $table->foreign('email')->references('email')->on('account_info');
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

                   Schema::create('experience', function (Blueprint $table) {
            $table->increments('id');
             $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('position');
            $table->string('location');
            $table->string('description');
            $table->string('working');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('company_name');
               });
               Schema::create('links', function (Blueprint $table) {
             $table->string('email');
             $table->increments('id');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('behence');
            $table->string('blog');
            $table->string('website');
            $table->string('status');
});
            Schema::create('documents', function (Blueprint $table) {
             $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('document');
            
        });
          Schema::create('additional_info', function (Blueprint $table) {
             $table->string('email');
            $table->foreign('email')->references('email')->on('account_info');
            $table->string('languages_known');
            $table->string('achievements');
            $table->string('activities');

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
