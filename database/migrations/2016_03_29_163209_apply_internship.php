<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplyInternship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('job_application', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->default(0);
            $table->foreign('student_id')->references('id')->on('account');
            $table->integer('internship_id')->unsigned()->default(0);
            $table->foreign('internship_id')->references('id')->on('post_internship');
            /* $table->integer('education_id')->unsigned()->default(0);
            $table->foreign('education_id')->references('id')->on('education');
            $table->integer('technicalskill_id')->unsigned()->default(0);
            $table->foreign('technicalskill_id')->references('id')->on('technical');
            $table->integer('nontechnicalskill_id')->unsigned()->default(0);
            $table->foreign('nontechnicalskill_id')->references('id')->on('non_technical');
            */
            
            $table->string('status');
             
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
