<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer_links extends Model
{
     protected $table='emp_links';
     protected $fillable = ['facebook','twitter'
         ,'linkedin'
        
    ];
         public $timestamps = false;
}
