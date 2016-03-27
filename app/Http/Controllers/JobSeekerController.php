<?php
        
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Flash;
use Illuminate\Support\Facades\InvalidConfirmationCodeException;
use Illuminate\Support\Facades\Mail;
use App\jobseeker;
use App\education;
use App\skillset;
use App\nontechnical_skills;
use App\User;

class JobSeekerController extends Controller {

    function index() {
        return view('employee_view.homepage');
    }

    function store(Request $req) {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:account,email',
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
            $user = new User(Input::all());
            $user->password = Hash::make($req->password);
            $user->user_type='intern';
            $user->confirmation_code=$confirmation_code;
            $user->save();
            Mail::send('pages.mail_intern',['confirmation_code_intern'=>$confirmation_code,'user'=>$user], function($message) {
            $message->to(Input::get('email'), Input::get('first_name'))
                ->subject('Verify your email address');
            });
           

            $jobseeker = new jobseeker;
            $jobseeker->jobseeker_user = $user->id;
            $jobseeker->first_name = $req->first_name;
            $jobseeker->last_name = $req->last_name;

            $jobseeker->email = $req->email;


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
    public function confirm_intern($confirmation_code) {
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
    

    public function getuser(Request $req) {
        return response()->json($req->user);chrome://chrome-signin/?access_point=0&reason=0
    }

    public function change_password_intern(Request $request) {
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

    public function student_info(Request $req) {

        $rules = array(
            'date_of_birth' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'city' => 'required',
            'description' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        }
        
        $user =   $req->session()->get('user_id');
        
        //return response()->json($user);

        $jobseeker = jobseeker::where('jobseeker_user', '=', $req->user->id)->first();
        $jobseeker->fill(Input::all());
          if ($req->file('profile_photo') && $req->file('profile_photo')->isValid()) {
            $destinationPath = 'uploads/profile_images/';
            $extension = Input::file('profile_photo')->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            Input::file('profile_photo')->move($destinationPath, $fileName);
            $employee->profile_photo = $destinationPath . $fileName;
        }
        
        if ($jobseeker->save()) {

            return response()->json($jobseeker);
        }
        return response()->json(['message' => 'data not saved']);
    }

    public function education(Request $req) {

        $rules = array(
            'university' => 'required',
            'degree_type' => 'required',
            'major' => 'required',
            'minor' => 'required',
            'completion_date' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } else
            $education = new education;
        $education->jobseeker_user = 2;
        $education->fill(Input::all());
        if ($education->save()) {
            return response()->json($education);
        } else {
            return response()->json(['message' => 'data not saved']);
        }
    }

    public function technical_skill(Request $req) {

        $rules = array(
            'skill_1' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
           // $user = $req->user;  
        $skillset = new skillset;
        $skillset->fill(Input::all());

        $skillset->jobseeker_user = 2;

        $skill_instance = skillset::where('jobseeker_user', '=', 2)->take(1)->get();
        if (count($skill_instance) != 0) {
            $skillset->id = $skill_instance[0]->id;
            $skillset->exists = TRUE;
        }


        if ($skillset->save()) {
            return response()->json($skillset);
        }

        return response()->json(['message' => 'database not updated'], 500);

}
   public function nontechnical(Request $req) {

        $rules = array(
            'skill_1' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
           // $user = $req->user;  
        $skillset = new nontechnical_skills;
        $skillset->fill(Input::all());

        $skillset->jobseeker_user = 2;

        $skill_instance = nontechnical_skills::where('jobseeker_user', '=', 2)->take(1)->get();
        if (count($skill_instance) != 0) {
            $skillset->id = $skill_instance[0]->id;
            $skillset->exists = TRUE;
        }


        if ($skillset->save()) {
            return response()->json($skillset);
        }

        return response()->json(['message' => 'database not updated'], 500);

}
 public function certifications(Request $req) {

        $rules = array(
            'certification_name' => 'required',
            'institution'=>'required',
            'serial_no'=>'required',
             'start_date'=>'required',
             'lifetime_validity'=>'required',
             'end_date'=>'required',
            'description'=>'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
        $certification=new certification;
        $certification->jobseeker_user=2;
        $certification->fill(Input::all());
        if ($certification->save()) {
            return response()->json($certification);
        }

        return response()->json(['message' => 'database not updated'], 500);
 }

}