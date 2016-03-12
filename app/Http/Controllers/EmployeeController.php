<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\employee;
use App\User;

class EmployeeController extends Controller {

   
    function store(Request $req) {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name'=>'required',
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
             $employee->company_name=$req->company_name;
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
    public function company_details(Request $request)
{
	
        $details=array(
	'brief'=>'required',
	'industry'=>'required',
	'company'=>'required',
	'start'=>'required',
	'full'=>'required'
	);

	$validator = Validator::make(Input::all(), $details);
        
        if($validator->fails())
        {
            return response()->json([
                        'error' => 'All mandatory fields are required',
                        'data' => $validator->messages()
                            ], 401
                    );
        }
     else
     {
         
$brief_description=$request->brief;
$industry=$request->industry;
$company=$request->company;
$start_date=$request->start;
$full_description=$request->full;
	$email='pranikajain773@gmail.com';
$details_add=array(
	'brief_description'=>$brief_description,
	'industry'=>$industry,
	'company_type'=>$company,
	'founded'=>$start_date,
	'full_description'=>$full_description
	);
if(DB::table('Employee_account_info')
            ->where('email', $email)
            ->update($details_add))
	{
            return response()->json([
                    
                    'message'=>'database saved successfully'
                ]);

	}

	else
	{
		return response()->json([
                    
                    'error'=>'database not saved'
                ]);
	}



}

		
}


public function company_address(Request $request)
{
	
$details=array(
	'address'=>'required',
	'line2'=>'required',
	'city'=>'required',
	'country'=>'required'
	);

	$validator = Validator::make(Input::all(), $details);
        
        if($validator->fails())
        {
            return 'fail';
        }
     else
     {
$address=$request->address;
$address_line2=$request->line2;
$city=$request->city;
$country=$request->country;
	$email='pranikajain773@gmail.com';
$address_add=array(
	'Address_line1'=>$address,
	'Address_line2'=>$address_line2,
	'city'=>$city,
	'country'=>$country
	);
if(DB::table('emp_address')
            ->where('email', $email)
            ->update($address_add))
	{
		return 'success';

	}

	else
	{
		return 'fail';
	}

}}





}


