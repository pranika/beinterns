<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\employar;
use App\User;

class EmployeeController extends Controller {

    function index()
    {
        return view('employee_view.homepage');
    }
    function store(Request $req) {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:Employee_account_info,email',
            'mobile' => 'required',
            'password' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return response()->json(
                            [
                        'error' => 'All mandatory fields are required',
                        'data' => $validator->messages()
                            ], 401
                            /* input errors */
            );
        }
        
        DB::beginTransaction();



        try {
            $user = new User(Input::all());
            $user->save();
            //$user_id = DB::table('users')->where('email', '=', $req->email)->get();
            $employee = new employee;
            $employee->employee_user=$user->id;
            $employee->first_name=$req->first_name;
            $employee->last_name=$req->last_name;
            $employee->email=$req->email;
            $employee->mobile=$req->mobile;
            $employee->password=$req->password;
            $employee->save();

            DB::commit();

            return response()->json(
                $employee->toArray(), 200
            );
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(
                [ 'error' => $e->errorInfo], 500
            );
        }
        
        
    }

}
