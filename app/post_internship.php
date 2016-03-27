<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_internship extends Model
{
    protected $table='post_internship';
      protected $fillable = [
        'employee_user',
          'title','skills','Responsibility','who_can_apply',
          'additional_info','category','location','start_date',
          'duration','stipend','stip_type','Amount1',
          'Amount2','currency','wage_type','Remark','application_deadline',
          'no_of_internships','type_of_internship','question1','question2','question3'
          
    ];
       public $timestamps = false;
}
