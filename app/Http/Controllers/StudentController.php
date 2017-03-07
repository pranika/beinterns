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
use App\student;
use App\education;
use App\skillset;
use App\nontechnical_skills;
use App\User;
use App\intern_internship;
use App\volunteer_activity;
use App\accomplishment;
use App\participation;
use App\training;
use App\intern_links;
use App\preference;
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
           

            $jobseeker = new student;
            $jobseeker->student_user = $user->id;
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
        return response()->json($req->user);
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

        $jobseeker = jobseeker::where('student_user', '=', $req->user->id)->first();
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
        $education->student_user = $req->user->id;
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

        $skillset->student_user = $req->user->id;

        $skill_instance = skillset::where('student_user', '=', $req->user->id)->first();
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

        $skillset->student_user = $req->user->id;

        $skill_instance = nontechnical_skills::where('student_user', '=', $req->user->id)->first();
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
        $certification->student_user=$req->user->id;
        $certification->fill(Input::all());
        if ($certification->save()) {
            return response()->json($certification);
        }

        return response()->json(['message' => 'database not updated'], 500);
 }
 public function languages(Request $req)
 {
      $rules = array(
           'languages'=>'required',
            'read'=>'required',
          'write'=>'required',
          'speak'=>'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
        $languages=new languages;
        $languages->student_user=$req->user->id;
        $languages->fill(Input::all());
        
         if ($languages->save()) {
            return response()->json($languages);
        }

        return response()->json(['message' => 'database not updated'], 500);
 }
 function intern_links(Request $req) {
       
     
        $details = array(
         
            'linkedin'=>'url',
            'behance'=>'url',
            'blog'=>'url',
            'website1'=>'url',
            'website2'=>'url'
        );

        $validator = Validator::make(Input::all(), $details);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 401);
        }
        // Create a new link and prefil with user input
        $links = new intern_links;
        $links->fill(Input::all());

        $links->student_user = $req->user->id;

        $link_instance = intern_links::where('jobseeker_user', '=', $req->user->id)->first();
        if (count($link_instance) != 0) {
            $links->id = $link_instance[0]->id;
            $links->exists = TRUE;
        }
      


        if ($links->save()) {
            return response()->json($links);
        }

        return response()->json(['message' => 'database not updated'], 500);
    }

     public function internships(Request $req)
 {
      $rules = array(
          'title'=>'required',
          'company_name'=>'required',
          'description'=>'required',
          'location'=>'required',
          'start_date'=>'required',
          'end_date'=>'required'
           
        );
       $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
        $intern=new intern_internship;
        $intern->student_user=$req->user->id;
        $intern->fill(Input::all());
        if ($intern->save()) {
            return response()->json($intern);
        }

        return response()->json(['message' => 'database not updated'], 500);
        
 
}
public function volunteer_activity(Request $req)
 {
      $rules = array(
          
          'description'=>'required',
         
          'start_date'=>'required',
      
           
        );
       $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
        $activity=new volunteer_activity;
        $activity->student_user=$req->user->id;
        $activity->fill(Input::all());
        if ($activity->save()) {
            return response()->json($activity);
        }

        return response()->json(['message' => 'database not updated'], 500);
        
 
}
public function accomplishment(Request $req)
 {
      $rules = array(
          
          'description'=>'required',
         
          'start_date'=>'required',
      
           
        );
       $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
        $accomplishment=new accomplishment;
        $accomplishment->student_user=$req->user->id;
        $accomplishment->fill(Input::all());
        if ($accomplishment->save()) {
            return response()->json($accomplishment);
        }

        return response()->json(['message' => 'database not updated'], 500);
        
 
}
public function participation(Request $req)
 {
      $rules = array(
          
          'description'=>'required',
         
          'start_date'=>'required',
      
           
        );
       $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
        $participation=new participation;
        $participation->student_user=$req->user->id;
        $participation->fill(Input::all());
        if ($participation->save()) {
            return response()->json($participation);
        }

        return response()->json(['message' => 'database not updated'], 500);
        
 
}
 public function training(Request $req)
 {
      $rules = array(
          'title'=>'required',
          'organisation'=>'required',
          'description'=>'required',
       
          'start_date'=>'required',
          'end_date'=>'required'
           
        );
       $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
        $training=new training;
        $training->student_user=$req->user->id;
        $training->fill(Input::all());
        if ($training->save()) {
            return response()->json($training);
        }

        return response()->json(['message' => 'database not updated'], 500);
        
 
}
public function preference(Request $req)
{
      $rules = array(
          'category'=>'required',
          'internship_type'=>'required',
          'location'=>'required',
       
          'stipend'=>'required'
          
           
        );
       $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory'], 500);
        } 
    
        $preference=new preference;
        $preference->student_user=$req->user->id;
        $preference->fill(Input::all());
        if ($preference->save()) {
            return response()->json($preference);
        }

        return response()->json(['message' => 'database not updated'], 500);
        
    
}


}