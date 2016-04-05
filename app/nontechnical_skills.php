<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nontechnical_skills extends Model
{   
    protected $table='non_technical';
     protected $fillable = [
        'skill_1',  'skill_2','skill_3','skill_4','skill_5'
    ];
       public $timestamps = false;
    /*    public function applicants() {
      return $this->belongsToMany
                    ('App\post_internship', 'job_application','nontechnicalskill_id','internship_id')
                       ->withPivot('status');
     }
     * /
     */
    
}
