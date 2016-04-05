<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model {

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company_name',
        'mobile',
        'company_type',
        'founded',
        'description',
        'website',
        'size',
        'industry',
        'address',
        'city',
        'country'
    ];
    protected $table = 'emp_account';
 

    public function user_emp() {
        return $this->hasOne('App\User');
    }

}
