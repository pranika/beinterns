<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intern_internship extends Model
{
   protected $table='intern_internship';
     protected $fillable = [
        'jobseeker_user', 'title','company_name',
          'start_date','end_date','description','location'
    ];
       public $timestamps = false;
}
