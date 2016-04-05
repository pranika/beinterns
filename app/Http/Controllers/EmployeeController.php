<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Flash;
use Illuminate\Support\Facades\InvalidConfirmationCodeException;
use Illuminate\Support\Facades\Mail;
use App\employer;
use App\User;
use App\employer_address;
use App\employer_links;
use App\post_internship;
use Log;

class EmployeeController extends Controller {

    function store(Request $req) {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email|unique:emp_account,email',
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
            $confirmation_code = str_random(30);
            response()->json($confirmation_code);
            $user = new User(Input::all());
            $user->password = Hash::make($req->password);
            $user->confirmation_code = $confirmation_code;
            $user->user_type = 'employer';
            $user->save();

            Mail::send('pages.email', ['confirmation_code' => $confirmation_code, 'user' => $user], function($message) {
                $message->to(Input::get('email'), Input::get('first_name'))
                        ->subject('Verify your email address');
            });

            $employee = new employer;
            $employee->employer_user = $user->id;
            $employee->first_name = $req->first_name;
            $employee->last_name = $req->last_name;
            $employee->email = $req->email;
            $employee->mobile = $req->mobile;
            $employee->company_name = $req->company_name;

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

    public function confirm($confirmation_code) {
        if (!$confirmation_code) {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();
        if (!$user) {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();



        return response()->json($user);
    }

    public function show(Request $request) {
        // $user=$req->session()->get('user_id');
        $employee = employer::where('employer_user', '=', $request->user->id)->first();
        return response()->json($employee);
    }

    public function details(Request $req) {
        //return response()->json(session()->get('user'));

        $details = array(
            'company_type' => 'required',
            'founded' => 'required',
            'industry' => 'required',
            'description' => 'required',
            'address' => 'required',
            'city' => 'required',
            'size' => 'required',
            'country' => 'required',
            'website' => 'required|url'
        );

        $validator = Validator::make(Input::all(), $details);

        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory']);
        } else {

            $employee = employer::where('employer_user', '=', $req->user->id)->first();
            $employee->fill(Input::all());

            if ($req->file('profile_photo') && $req->file('profile_photo')->isValid()) {
                $destinationPath = 'uploads/profile_images/';
                $extension = Input::file('profile_photo')->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;
                Input::file('profile_photo')->move($destinationPath, $fileName);
                $employee->profile_photo = $destinationPath . $fileName;
            }


            /** Save File Section End * */
            if ($employee->save()) {
                return response()->json($employee);
            } else {
                return response()->json([
                            'message' => 'database not updated'
                                ], 500);
            }
        }
    }

    function add_links(Request $req) {


        $details = array(
            'facebook' => 'required|url',
                // 'twitter'=>'required|url',
                //'linkedin'=>'required|url'
        );

        $validator = Validator::make(Input::all(), $details);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 401);
        }
        // Create a new link and prefil with user input
        $links = new employer_links;
        $links->fill(Input::all());

        $links->employee_user = $req->user->id;

        $link_instance = employer_links::where('employer_user', '=', $req->user->id)->first();
        if (count($link_instance) != 0) {
            $links->id = $link_instance[0]->id;
            $links->exists = TRUE;
        }



        if ($links->save()) {
            return response()->json($links);
        }

        return response()->json(['message' => 'database not updated'], 500);
    }

    public function getuser(Request $req) {
        return response()->json($req->user);
    }

    function show_links(Request $req) {
        $links = employer_links::where('employer_user', '=', $req->user->id)->first();
        return response()->json($links);
    }

    public function change_password(Request $request) {
        $user = $request->user;
        if (Hash::check($request->password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->newPassword)
            ]);

            if ($user->save()) {
                return response()->json($user);
            }
        }
        return response()->json(['message' => 'Password not exist'], 500);
    }

   
}
