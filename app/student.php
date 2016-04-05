<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
     protected $fillable = [
       'id', 'first_name', 'last_name', 'email', 'gender', 'mobile', 'password',
         'date_of_birth','nationality','country','city','description'
    ];
    protected $table = 'account';

    public function user_emp() {
        return $this->hasOne('App\User');
    }
   
     public function applicants() {
      return $this->belongsToMany
                    ('App\post_internship', 'job_application','student_id','internship_id')
                       ->withPivot('status');
     }

}
