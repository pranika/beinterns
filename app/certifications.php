<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certifications extends Model
{
    protected $table='certification';
     protected $fillable = [
        'jobseeker_user', 'certificate_name','institution',
          'serial_no','start_date','lifetime_validity',
          'end_date','description'
    ];
      
       public $timestamps = false;
}
