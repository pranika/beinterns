<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participation extends Model
{
      protected $table='particpation';
     protected $fillable = [
      
          'start_date','description'
    ];
       public $timestamps = false;
}
