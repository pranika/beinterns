<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employar extends Model {

    protected $fillable = [
        'first_name', 'last_name', 'email', 'company_name', 'mobile', 'password'
    ];
    protected $table = 'Employee_account_info';

    public function user_emp() {
        return $this->hasOne('App\User');
    }

}
