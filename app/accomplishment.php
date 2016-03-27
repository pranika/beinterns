<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accomplishment extends Model
{
    protected $table='accomplishment';
     protected $fillable = [
        'jobseeker_user',
          'start_date','description'
    ];
       public $timestamps = false;
}
