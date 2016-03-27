<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostInternship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('post_internship', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_user')->unsigned()->default(0);
            $table->foreign('employee_user')->references('id')->on('users');
            $table->string('title');
            $table->string('skills');
            $table->string('Responsibility');
            $table->string('who_can_apply');
            $table->string('additional_info');
            $table->string('category');
            $table->string('location');
            $table->date('start_date');
            $table->string('duration');
            $table->string('stipend');
            $table->string('stip_type');
            $table->integer('Amount1');
            $table->integer('Amount2');
             $table->string('currency');
            $table->string('wage_type');
            $table->string('Remark');
            $table->date('application_deadline');
            $table->integer('no_of_internships');
            $table->string('type_of_internship');
              $table->string('question1');
               $table->string('question2');
                $table->string('question3');
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
