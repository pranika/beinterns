<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model {

    protected $fillable = [
        'first_name', 'last_name', 'email', 'company_name', 'phone_no', 'password'
    ];
    protected $table = 'Employee_account_info';

    public function user_emp() {
        return $this->hasOne('App\User');
    }

}
