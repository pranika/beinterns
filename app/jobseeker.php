<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobseeker extends Model
{
     protected $fillable = [
        'first_name', 'last_name', 'email', 'gender', 'mobile', 'password',
         'date_of_birth','nationality','country','city','description'
    ];
    protected $table = 'account';

    public function user_emp() {
        return $this->hasOne('App\User');
    }
   
    

}
