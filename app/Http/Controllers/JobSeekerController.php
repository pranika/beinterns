<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\jobseeker;
use App\User;

class JobSeekerController extends Controller {

    function index()
    {
        return view('employee_view.homepage');
    }
    function store(Request $req) {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:account_info,email',
            'mobile' => 'required',
            'password' => 'required',
            'gender'  => 'required'
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
            $jobseeker = new jobseeker;
            $jobseeker->jobseeker_user=$user->id;
            $jobseeker->first_name=$req->first_name;
            $jobseeker->last_name=$req->last_name;
            $jobseeker->gender=$req->gender;
            $jobseeker->email=$req->email;
            $jobseeker->mobile=$req->mobile;
            $jobseeker->password=$req->password;
            $jobseeker->save();

            DB::commit();

            return response()->json(
                $jobseeker->toArray(), 200
            );
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(
                [ 'error' => $e->errorInfo], 500
            );
        }
        
        
    }

}
