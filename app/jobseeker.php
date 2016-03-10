<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobseeker extends Model
{
     protected $fillable = [
        'first_name', 'last_name', 'email', 'gender', 'mobile', 'password'
    ];
    protected $table = 'account_info';

    public function user_emp() {
        return $this->hasOne('App\User');
    }

}
