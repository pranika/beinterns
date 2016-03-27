/* $(document).ready(function() {
$("#login_btn_student").addClass("disabled");
if()

});


$("#login_btn_student").addClass('disabled');

var toValidate = $('#login-user-student, #login-password-student'),
    valid = false;
toValidate.keyup(function () {
    if ($(this).val().length > 0) {
        $(this).data('valid', true);
    } else {
        $(this).data('valid', false);
    }
    toValidate.each(function () {
        if ($(this).data('valid') == true) {
            valid = true;
        } else {
            valid = false;
        }
    });
    if (valid === true) {
        $("#login_btn_student").prop('disabled', false);
    } else {
        $("#login_btn_student").prop('disabled', true);
    }
});

*/




function signup_student_validation()
{
var fn_signup = document.getElementById('fn_signup').value;
var ln_signup = document.getElementById('ln_signup').value;
var email_signup = document.getElementById('email_signup').value;
var pass_signup = document.getElementById('pass_signup').value;
var cpass_signup = document.getElementById('cpass_signup').value;
var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
var valid = emailRegex.test(email_signup);
var terms=$('#terms').is(':checked');

$("#fn_signup,#ln_signup,#email_signup,#pass_signup,#cpass_signup").focus(function(){
  $(this).closest('.form-group').removeClass('has-error').end();
})

if (fn_signup=='' || fn_signup === null) {
  $('#fn_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your name");


} 

else if (ln_signup=='' || ln_signup === null) {
  $('#ln_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your Last name");


} 

else if(email_signup=='' || email_signup === null)
{
$('#email_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your email");
  
}

else if(!valid)
{
  $('#email_signup').val("").end().blur();
  $('#email_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter a valid email");
  
}

else if(pass_signup=='' || pass_signup === null)
{
$('#pass_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter your password");

}
else if(pass_signup.length < 7)
{
  $('#pass_signup').val("").end().blur();
$('#pass_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Password should be of atleast seven characters");

}

else if(cpass_signup=='' || cpass_signup === null)
{ 
  
  $('#cpass_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Confirm Your password");

}

 else if (pass_signup!=cpass_signup) {
  $('#cpass_signup').val("").end().blur();
  $('#cpass_signup').closest('.form-group').addClass('has-error').end().prop("placeholder", "Password didn't match!");

} 

else if(!terms)
{
  alert("Check the terms and conditions");
}

else {}

}





function signup_employer_validation()
{
var fn_signup_employer = document.getElementById('fn_signup_employer').value;
var ln_signup_employer = document.getElementById('ln_signup_employer').value;
var email_signup_employer = document.getElementById('email_signup_employer').value;
var pass_signup_employer = document.getElementById('pass_signup_employer').value;
var mobile= document.getElementById('mobile').value;
var companyname= document.getElementById('companyname').value;
var cpass_signup_employer = document.getElementById('cpass_signup_employer').value;
var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
var valid = emailRegex.test(email_signup_employer);
var terms_employer=$('#terms_employer').is(':checked');
var re_number =  /^[0-9-+]+$/;
var valid_no =re_number.test(mobile);

$("#fn_signup_employer,#ln_signup_employer,#email_signup_employer,#pass_signup_employer,#cpass_signup_employer,#mobile,#companyname").focus(function(){
  $(this).closest('.form-group').removeClass('has-error').end();
})

if (fn_signup_employer=='' || fn_signup_employer === null) {
  $('#fn_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your name");


} 

else if (ln_signup_employer=='' || ln_signup_employer === null) {
  $('#ln_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your Last name");


} 

else if(email_signup_employer=='' || email_signup_employer === null)
{
$('#email_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your email");
  
}

else if(!valid)
{
  $('#email_signup_employer').val("").end().blur();
  $('#email_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter a valid email");
  
}

else if (companyname=='' || companyname === null) {
  $('#companyname').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your company name");


} 


else if(mobile=='' || mobile === null)
{
  $('#mobile').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter your mobile number");
  
}
else if(!valid_no)
{
  $('#mobile').val("").end().blur();
  $('#mobile').closest('.form-group').addClass('has-error').end().prop("placeholder", "Invalid Mobile Number");
  
}
else if(mobile.length != 9)
{
  $('#mobile').val("").end().blur();

  $('#mobile').closest('.form-group').addClass('has-error').end().prop("placeholder", "Should be of 9 digits");
  
}


else if(pass_signup_employer=='' || pass_signup_employer === null)
{
$('#pass_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter your password");

}
else if(pass_signup_employer.length < 7)
{
  $('#pass_signup_employer').val("").end().blur();
$('#pass_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Password should be of atleast seven characters");

}

else if(cpass_signup_employer=='' || cpass_signup_employer === null)
{ 
  
  $('#cpass_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Confirm Your password");

}

 else if (pass_signup_employer!=cpass_signup_employer) {
  $('#cpass_signup_employer').val("").end().blur();
  $('#cpass_signup_employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Password didn't match!");

} 

else if(!terms_employer)
{
  alert("Check the terms and conditions");
}

else {}

}



function login_student_validation()
{
var login_user_student = document.getElementById('login-user-student').value;
var login_password_student = document.getElementById('login-password-student').value;
var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
var valid = emailRegex.test(login_user_student);

$("#login-user-student,#login-password-student").focus(function(){
  $(this).closest('.form-group').removeClass('has-error').end();
})

if(login_user_student=='' || login_user_student=== null)
{
$('#login-user-student').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your email");
  
}

else if(!valid)
{
  $('#login-user-student').val("").end().blur();
  $('#login-user-student').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter a valid email");
  
}


else  if(login_password_student=='' || login_password_student === null)
{
$('#login-password-student').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter your password");

}

else {}

}



function login_employer_validation()
{
var login_user_employer = document.getElementById('login-user-employer').value;
var login_password_employer = document.getElementById('login-password-employer').value;
var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
var valid = emailRegex.test(login_user_employer);

$("#login-user-employer,#login-password-employer").focus(function(){
  $(this).closest('.form-group').removeClass('has-error').end();
})

if(login_user_employer=='' || login_user_employer=== null)
{
$('#login-user-employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Please enter your email");
  
}

else if(!valid)
{
  $('#login-user-employer').val("").end().blur();
  $('#login-user-employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter a valid email");
  
}


else  if(login_password_employer=='' || login_password_employer === null)
{
$('#login-password-employer').closest('.form-group').addClass('has-error').end().prop("placeholder", "Enter your password");

}

else {}



}


$(function(){
$('#signup_student').on('show.bs.modal', function () {
$('html').addClass('modal-open');
});
$('#signup_student').on('hide.bs.modal', function () {
$('html').removeClass('modal-open');
});
});  



$(function(){
$('#signup_employer').on('show.bs.modal', function () {
$('html').addClass('modal-open');
});
$('#signup_employer').on('hide.bs.modal', function () {
$('html').removeClass('modal-open');
});
});  



$(function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  });

  $(function() {
    $( "#sortable3, #sortable4" ).sortable({
      connectWith: ".connectedSortable2"
    }).disableSelection();
  });

  $(function() {
    $( "#sortable5, #sortable6" ).sortable({
      connectWith: ".connectedSortable3"
    }).disableSelection();
  });

  $(function() {
    $( "#sortable7, #sortable8" ).sortable({
      connectWith: ".connectedSortable4"
    }).disableSelection();
  });


  $(function() {
        var linksfields = $('#links_fields_employer');
       var linksurl=$('#links_url_employer');
      var i = $('#links_fields_employer div.form-group').size() ;
        
        $('#morelinks_employer').click(function() {
                $('<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12><div class="form-group required"><label>Links</label><select class="form-control" id="employer_links' + i + '"><option>Facebook</option><option>Twitter</option><option>LinkedIn</option><option>Blog</option><option>Official Website</option><option>Behance</option><option>Other</option></select></div></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12><div class="form-group required"><label>URl</label><input type="text" class="form-control" id="employer_url' + i + '" placeholder="URL Here"></div></div>').appendTo(linksfields);
               
                i++;
                return false;
        });
        
       
});


    $(function() {
        var linksfields = $('#links_fields_student');
       var linksurl=$('#links_url_student');
      var i = $('#links_fields_student div.form-group').size() ;
        
        $('#morelinks_student').click(function() {
                $('<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12><div class="form-group required"><label>Links</label><select class="form-control" id="intern_links' + i + '"><option>Facebook</option><option>Twitter</option><option>LinkedIn</option><option>Blog</option><option>Portfolio Website</option><option>Behance</option><option>Other</option></select></div></div>    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12><div class="form-group required"><label>URl</label><input type="text" class="form-control" id="intern_url' + i + '" placeholder="URL Here"></div></div>').appendTo(linksfields);
                
                i++;
                return false;
        });
        
       
});



$(document).ready(function() {
   $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'fixed') {
            $('#for_fixed').css('display','block');           
       }

       else {
            $('#for_fixed').css('display','none');   
       }
   });
});

$(document).ready(function() {
   $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'nego') {
            $('#for_negotiable').css('display','block');           
       }

       else {
            $('#for_negotiable').css('display','none');   
       }
   });
});



  $(function() {
        var linksfields_c1 = $('#certification_fields_1');
       var linksurl_c2=$('#certification_fields_2');
      var row_certification = $('#row_certification');
        
        $('#add_certification').click(function() {

         /* $('<div class="hr-title hr-long center"><h1>Certificate</h1></div>').appendTo(row_certification);*/

           $('<div class="col-lg-12"><h1>Newer Certification</h1> </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >  <div class="form-group required" id="div_cname"> <label for="InputName">Certificate Name <sup>*</sup> </label> <input required type="numtextber" class="form-control" name="" id="intern_cname"  placeholder="Certificate Name">  </div>  </div> <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >  <div class="form-group required" id="div_cins"> <label for="InputName">Certificate Institution <sup>*</sup> </label> <input required type="numtextber" class="form-control" name="" id="intern_cinsitute" placeholder="Certificate Institution">   </div>   </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >    <div class="form-group required" id="div_cserial"> <label for="InputName">Serial Number </label> <input required type="numtextber" class="form-control"  id="intern_cserial"  placeholder="Certificate Serial Number">    </div>       </div>           <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >  <div class="form-group required" id="div_cstart">  <label for="InputName">Start Date<sup>*</sup> </label>  <input required type="date" class="form-control"  id="intern_certi_start" placeholder="Start Date ">   </div>  </div>      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >   <div class="form-group required" id="div_end">  <label for="InputName">End Date<sup>*</sup> </label>   <input required type="date" class="form-control"  id="intern_certi_end"  placeholder="End date">  </div>      <div class="form-group required" id="div_cpresent">  <label class="checkbox-inline">  <input type="checkbox" id="intern_certi_present" value="option1"> Present   </label>      </div>    </div>        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >  <div class="form-group required" id="div_cadditional"> <label for="InputName">Additional Description </label>  <textarea required type="text" class="form-control"  id="intern_certi_desc"     placeholder="Description "></textarea>  </div>  </div>').appendTo(linksfields_c1);
                return false;
        });
        
       
});



  $(function() {
        var linksfields_e1 = $('#experience_fields_1');
       
      var row_experience = $('#row_experience');
        
        $('#add_experience').click(function() {

          /*$('<div class="hr-title hr-long center"><h1>Experience</h1></div>').appendTo(row_experience); */

 $('<div class="col-lg-12"><h1>Newer Experience</h1> </div> <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" > <div class="form-group required" id="exp_job"> <label for="InputName">Job Title <sup>*</sup> </label> <input required type="text" class="form-control"  id="intern_job" placeholder="Job Title">  </div>   </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >  <div class="form-group required" id="exp_cname"> <label for="InputName">Company Name <sup>*</sup> </label><input required type="text" class="form-control"  id="intern_compnay"  placeholder="Company Name"> </div>  </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >    <div class="form-group required" id="exp_loc"> <label for="InputName">Location  </label>  <select class="form-control" id="intern_exp_loc">   <option>Dubai</option>   <option>Abu Dhabi</option> </select> </div>  </div>    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" > <div class="form-group required" id="exp_start"> <label for="InputName">Start Date<sup>*</sup> </label><input required type="date" class="form-control" name="name" id="intern_exp_start" placeholder="Start Date "> </div>  </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" > <div class="form-group required" id="exp_end">  <label for="InputName">End Date<sup>*</sup> </label><input required type="date" class="form-control" name="name" id="intern_exp_end"  placeholder="End date">   </div>  <div class="form-group required" id="exp_present"> <label class="checkbox-inline">  <input type="checkbox" id="intern_exp_present" value="option1"> Present  </label>  </div> </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >  <div class="form-group required" id="exp_additional"> <label for="InputName">Additional Description </label>  <textarea required type="text" class="form-control" name="name" id="intern_exp_desc" placeholder="Description "></textarea>  </div>  </div>').appendTo(linksfields_e1);

                return false;
        });
        
       
});


$(function(){
  if($( "#marks_perf option:selected" ).text() == "GP")
    $('#out_of').css('display','block');
  else
    $('#out_of').css('display','none');
});

$(function(){
 $(".js-example-basic-multiple").select2();
});



 $(function() {
        var linksfields_edu1 = $('#links_fields_education');
       var i = ( $('#links_fields_education div.form-group').size() )  -  10 + 2 ;
           var j=0;
        $('#add_more_education').click(function() {

          /*$('<div class="hr-title hr-long center"><h1>Experience</h1></div>').appendTo(row_experience); */

 $('<div class="col-lg-12"><h1 class="text-left">Education</h1> <div><button class="btn btn-primary btn-large"  id="remove_from_education'+ i +'"  >Remove</button></div></div>     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <div class="form-group required"> <label for="InputName">University/College <sup>*</sup> </label> <input required type="numtextber" class="form-control" name="name" id="intern_college'+ i +'"  placeholder="Enter your college/university">  </div>  </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <div class="form-group required"> <label for="InputName">Degree Level<sup>*</sup> </label> <select class="form-control" id="intern_degree'+ i +'"> <option>Under Graduate(UG)</option> <option>Post Graduate(PG)</option>   <option>Doctorate(PhD)</option>  </select>   </div>  </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">   <div class="form-group required"> <label for="InputName">Degree Type<sup>*</sup> </label> <select class="form-control" id="intern_dtype'+ i +'">  <option>Engineering</option>  <option>Arts</option> <option>Science</option> <option>Medical</option> </select> </div> </div> <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <div class="form-group required"> <label for="InputName">Start Date<sup>*</sup> </label><input required type="date" class="form-control" name="name" id="intern_edu_start'+ i +'"   placeholder="Start Date "> </div>  </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">  <div class="form-group required"> <label for="InputName">End Date<sup>*</sup> </label> <input required type="date" class="form-control" name="name" id="intern_edu_end'+ i +'" placeholder="End date"> </div> <div class="form-group required">  <label class="checkbox-inline">  <input type="checkbox" id="intern_edu_present'+ i +'" value="option1"> Present </label> </div>  </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">   <div class="form-group " id="Performance'+ i +'"> <label class="control-label" for="formGroupInputLarge">Performance</label> <div class="col-lg-3">  <select class="" id="marks_perf'+ i +'"> <option value="GP">GP</option> <option value="%">%</option>  </select> </div>   <div class="col-lg-3" id="out_of'+ i +'">       <select class="" id="intern_pointer'+ i +'">     <option>4</option>      <option>10</option>   </select>  </div>   <div class="col-lg-3 ">    <input type="text" class="form-control" placeholder="Marks" id="intern_marks'+ i +'">   </div>  </div>  </div>      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">  <div class="form-group required"><label for="InputName">Specialisation <sup>*</sup> </label>  <input required type="text" class="form-control" name="name" id="intern_spec'+ i +'" placeholder="Specialisation">    </div> </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">  <div class="form-group required">  <label for="InputName">Major(s) <sup>*</sup> </label>  <input required type="text" class="form-control" name="name" id="intern_major'+ i +'"   placeholder="Major">   </div>  </div>  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">  <div class="form-group required">   <label for="InputName">Additional Description </label>  <textarea required type="text" class="form-control" name="name" id="intern_edu_desc'+ i +'"  placeholder="Description "></textarea> </div>  </div>').appendTo(linksfields_edu1);
                i++;
                return false;


        });

       

});

/*
 function remove_education_fn()
 {
  alert("hhhhj");
  $('#intern_college2').closest('.form-group').remove();

 }
 */

 $(function(){
var j=1;
for (j=1; j<=1000;j++)
{
  $("#remove_from_education"+j).click(function() {
    /* $("#intern_college"+j).closest(".form-group").remove();   */
    alert('hi');
    return false;
  });
}


 });



