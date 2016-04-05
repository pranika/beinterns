<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skillset extends Model
{
    protected $table='technical';
     protected $fillable = [
        'skill_1',  'skill_2','skill_3','skill_4','skill_5'
    ];
       public $timestamps = false;
   /*   public function applicants() {
      return $this->belongsToMany
                    ('App\post_internship', 'job_application','technicalskill_id','internship_id')
                       ->withPivot('status');
     }
    * /
    */
}
