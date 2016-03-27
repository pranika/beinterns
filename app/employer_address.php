<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer_address extends Model
{
    protected $table='emp_address';
     protected $fillable = [
        'employee_user', 'Address',  'city','country'
    ];
  
}
