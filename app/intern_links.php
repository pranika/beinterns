<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intern_links extends Model
{
    protected $table ='links';
  
     protected $fillable = ['behance','blog','website1','website2'
         ,'linkedin'
        
    ];
         public $timestamps = false;
}
