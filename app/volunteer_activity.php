<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class volunteer_activity extends Model
{
    protected $table='volunteer_activity';
     protected $fillable = [
        'jobseeker_user',
          'start_date','description'
    ];
       public $timestamps = false;
}
