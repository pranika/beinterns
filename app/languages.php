<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class languages extends Model
{
     protected $table='languages';
     protected $fillable = [
        'jobseeker_user', 'languages','read',
          'write','speak'
    ];
       public $timestamps = false;
}
