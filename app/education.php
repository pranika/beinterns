<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
     protected $table='education';
     protected $fillable = [
        'degree_type', 'university_name',  'minor','major',
         'gpa_four','gpa_ten','completion_date'
    ];
         public $timestamps = false;
     
}
