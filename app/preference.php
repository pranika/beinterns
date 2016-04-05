<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preference extends Model
{
     protected $table='preferences';
     protected $fillable = [
      
          'category','internship_type','location','stipend'
    ];
       public $timestamps = false;
}
