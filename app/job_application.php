<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_application extends Model
{
     protected $table='job_application';
      protected $fillable = [
        'jobseeker_id',
          'internship_id','status'
          
    ];
       public $timestamps = false;
       
       
}
