<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participation extends Model
{
      protected $table='particpation';
     protected $fillable = [
        'jobseeker_user',
          'start_date','description'
    ];
       public $timestamps = false;
}
