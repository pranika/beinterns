<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer_links extends Model
{
     protected $table='emp_links';
     protected $fillable = ['behance','blog','website1','website2'
         ,'linkedin'
        
    ];
         public $timestamps = false;
}
