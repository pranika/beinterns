@extends('master_all')

@section('backimage')
<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/student_2.jpg'); background-size: cover; min-height:370px;" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Employer Account</h1>
            <span>Complete Your Profile</span>
        </div>
        
    </div> <!--container-->


</section>
<!-- END: PAGE TITLE -->
@stop

@section('employer_account')
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
			<div class="hr-title hr-long center"><abbr>Basic Details</abbr>
            </div>
            
            <div class="basic-detaisl">
			   <div class="form-group login-username">
                    <div >
                    <label>First Name</label>
                       <input name="log" id="fn_signup_employer" class="form-control input" size="20"
                               placeholder="Enter your First Name" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    <label>Last Name</label>
                        <input name="Password" id="ln_signup_employer" class="form-control input" size="20"
                               placeholder="Enter Your Last name" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    <label>Official Email</label>
                        <input name="Password" id="email_signup_employer" class="form-control input" size="20"
                               placeholder="Enter Your Email" type="email" required>
                    </div>
                </div>

             </div> <!--basic details class-->

            <div class="change password" style="margin-top: 9%;">
			<div class="hr-title hr-long center"><abbr>Change Password</abbr>
            </div>

			    <div class="form-group login-username">
                    <div >
                    <label>Current Password</label>
                       <input name="log" id="fn_signup_employer" class="form-control input" size="20"
                               placeholder="Enter your Current Password" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    <label>New Password</label>
                        <input name="Password" id="ln_signup_employer" class="form-control input" size="20"
                               placeholder="Enter Your New Password" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    <label>Confirm Password</label>
                        <input name="Password" id="email_signup_employer" class="form-control input" size="20"
                               placeholder="Confirm Your Password" type="email" required>
                    </div>
                </div>
				<a class="btn btn-primary pull-right btn-large" href="">Save</a>
			</div><!--change pass-->
				
			</div>
		</div>
	</div>
</section>



@stop