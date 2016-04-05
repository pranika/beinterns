<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\post_internship;
use App\job_application;
use App\User;
use App\education;
use App\skillset;
use App\nontechnical_skills;
use App\student;
use App\apply_internship;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class InternshipApplicationController extends Controller {

    public function post_internship(Request $req) {

        $details = array(
            'title' => 'required',
            'skills' => 'required',
            'Responsibility' => 'required',
            'who_can_apply' => 'required',
            'additional_info' => 'required',
            'category' => 'required',
            'location' => 'required',
            'start_date' => 'required',
            'duration' => 'required',
            'stipend' => 'required',
            'stip_type' => 'required',
            'Amount1' => 'required',
            'Amount2' => 'required',
            'currency' => 'required',
            'wage_type' => 'required',
            'Remark' => 'required',
            'application_deadline' => 'required',
            'no_of_internships' => 'required',
            'type_of_internship' => 'required',
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
        );

        $validator = Validator::make(Input::all(), $details);

        if ($validator->fails()) {
            return response()->json(['message' => 'All fields are mandatory']);
        }
        $post_internship = new post_internship;
        $post_internship->employer_user = $req->user->id;
        $post_internship->fill(Input::all());


        if ($post_internship->save()) {
            return response()->json($post_internship);
        }

        return response()->json(['message' => 'database not updated'], 500);
    }

    public function show_internship(Request $req) {
        $internship = post_internship::where('employer_user', '=', $req->user->id);
        return response()->json([$internship]);
    }

    public function update_internship(Request $req) {
        $internship = post_internship::where('employer_user', '=', $req->user->id);
        $internship->fill(Input::all());

        if ($internship->save()) {
            return response()->json($internship);
        }

        return response()->json(['message' => 'database not updated'], 500);
    }

    public function add_intern(Request $req) {
      $job = post_internship::find($req->id);
      $jobseeker = student::where('student_user', '=', $req->user->id)->first();
      $job->applicants()->attach($jobseeker->id, array('status' => 'applied'));
     // return response()->json($job->applicats);
/*
        $education = education::where('student_user', '=', $req->user->id)->first();


        $job->education()->attach($education->id);
        $technical = skillset::where('student_user', '=', $req->user->id)->first();


        $job->technical_skills()->attach($technical->id);
        $nontechnical = nontechnical_skills::where('student_user', '=', $req->user->id)->first();


        $job->nontechnical_skills()->attach($nontechnical->id);
 
        $job->save();

*/

        return response($job);
 
    }

    public function updatestatus(Request $req) {

        $job = job_application::find($req->id);
        $job->status = $req->status;
        if ($job->save()) {
            response()->json('data updated');
        } else {
            response()->json('data updation failed');
        }
    }

    public function getinternship(Request $req) {
        $intern_details = post_internship::where('id', '=', 2)->first();
        DB::connection()->enableQueryLog();
        if ($intern_details->applicants) {

            $interns = $intern_details::whereHas('applicants', function($q) use ( $intern_details) {
                        // $q->where('job_application.status', '=', 'hired')
                        $q->where('post_internship.id', 2)

                        ;
                    })->get();

            return response()->json($interns);
        } else {
            return response()->json('No one has applied for this job');
        }
    }

    public function getinterns(Request $req) {
        $intern_details = post_internship::where('id', '=', 1)->first();
        DB::connection()->enableQueryLog();
        if ($intern_details->applicants) {

            $interns = student::whereHas('applicants', function($q) use($intern_details) {
                        $q->where('job_application.status', '=', 'applied');
                    })->get();
                  //  response()->json($interns);
                  if(count($interns) > 0)
                    {
                       $jobseeker = student::where('student_user', '=', $req->user->id)->first();
                       $education=education::where('student_user','=',$req->user->id)->first();
                       $technical=skillset::where('student_user','=',$req->user->id)->first();
                       $nontechnical=nontechnical_skills::where('student_user','=',$req->user->id)->first();
                        return response()->json(['account_details' => $jobseeker
                ,'technical_skills'=>$technical,
               'notechnical_skills'=>$nontechnical,
                            'education'=>$education
                       
           ]);
                    }
           /* $education = education::whereHas('applicants', function($q) use($intern_details) {
                        $q->where('job_application.status', '=', 'applied');
                    })->get();
            $technical = skillset::whereHas('applicants', function($q) use($intern_details) {
                        $q->where('job_application.status', '=', 'applied');
                    })->get();
            $nontechnical = nontechnical_skills::whereHas('applicants', function($q) use($intern_details) {
                        $q->where('job_application.status', '=', 'applied');
                    })->get();
            * /*
            */
           
        } else {
            return response()->json('No one has applied for this job');
        }
    }

    public function sortby_date(Request $req) {
        $internship = post_internship::where('created_at', '=', $req->date)->first();
        return response()->json($internship);
    }

    public function sortby_category(Request $req) {
        $internship = post_internship::where('category', '=', $req->category)->first();
        return response()->json($internship);
    }

    public function sortby_location(Request $req) {

        $internship = post_internship::where('location', '=', $req->location)->first();
        return response()->json($internshp);
    }

    public function sortby_type(Request $req) {
        $internship = post_internship::where('type_of_internship', '=', $req->type)->first();
        return response()->json($internshp);
    }

}
