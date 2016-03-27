<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nontechnical_skills extends Model
{   
    protected $table='non_technical';
     protected $fillable = [
        'jobseeker_user', 'skill_1',  'skill_2','skill_3','skill_4','skill_5'
    ];
       public $timestamps = false;
    
}
