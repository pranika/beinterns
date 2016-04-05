<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_internship extends Model {

    protected $table = 'post_internship';
    protected $fillable = [
        'employer_user',
        'title', 'skills', 'Responsibility', 'who_can_apply',
        'additional_info', 'category', 'location', 'start_date',
        'duration', 'stipend', 'stip_type', 'Amount1',
        'Amount2', 'currency', 'wage_type', 'Remark', 'application_deadline',
        'no_of_internships', 'type_of_internship', 'question1', 'question2', 'question3'
    ];
    public $timestamps = false;

    public function applicants() {
      return $this->belongsToMany
                    ('App\student', 'job_application','internship_id','student_id')
                       ->withPivot('status');
       
       /*
        return $this->hasManyThrough
                    ('App\jobseeker', 'App\apply_internship', 'internship_id', 'jobseeker_user')
                         
        */
    }
    /*
      public function education() {
      return $this->belongsToMany
                    ('App\education', 'job_application','internship_id','education_id');
                     //  ->withPivot('status');
       
     
    }
    
        public function technical_skills() {
      return $this->belongsToMany
                    ('App\skillset', 'job_application','internship_id','technicalskill_id');
                  //     ->withPivot('status');
        }
          public function nontechnical_skills() {
      return $this->belongsToMany
                    ('App\nontechnical_skills', 'job_application','internship_id','nontechnicalskill_id');
                    //   ->withPivot('status');
          }
*/
}
