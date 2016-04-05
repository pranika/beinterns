<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    protected $table='participation';
     protected $fillable = [
        'student_user', 'title','organisation',
          'start_date','end_date','description'
    ];
       public $timestamps = false;
}
