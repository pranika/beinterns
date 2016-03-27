<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\employee;

class PagesController extends Controller
{
    //
    public function index(Request $req)
    {
        $req->session()->put('key', 'value');
    	return view('pages.index') ;
    }

    public function about()
    {
    	return view('pages.about') ;
    }

    public function homepage()
    {
    	return view('pages.homepage') ;
    }

    public function aboutus()
    {
        return view('pages.aboutus') ;
    }

    public function contactus()
    {
        return view('pages.contactus') ;
    }

    public function blog()
    {
        return view('pages.blog') ;
    }
    public function terms()
    {
        return view('pages.terms') ;
    }
    public function privacy()
    {
        return view('pages.privacy') ;
    }
    public function employerdetails()
    {
        return view('pages.employerdetails') ;
    }
    public function studentdetails()
    {
        return view('pages.studentdetails') ;
    }
    
    public function studentinfo()
    {
        return view('pages.studentinfo') ;
    }
    public function employerinfo()
    {
        return view('pages.employerinfo') ;
    }

     public function employer_account(Request $req)
    {
     
       
         return view('pages.employer_account');
         
    }
     public function student_account()
    {
        return view('pages.student_account') ;
    }
      public function studentdetails_vertical()
    {
        return view('pages.studentdetails_vertical') ;
    }

      public function postjob()
    {
        return view('pages.postjob') ;
    }


}