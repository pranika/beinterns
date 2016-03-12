<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	
	<link rel="shortcut icon" href="images/favicon.png">
	<title>BeInterns</title>

	<!-- Bootstrap Core CSS -->
	<!--link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/b3patch.css"-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="vendor/animateit/animate.min.css" rel="stylesheet">

	<!-- Vendor css -->
	<link href="vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Template base -->
	<link href="css/theme-base.css" rel="stylesheet">

	<!-- Template elements -->
	<link href="css/theme-elements.css" rel="stylesheet">	
	
<!-- Responsive classes -->
	<link href="css/responsive.css" rel="stylesheet">

<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->	


	<!-- Template color -->
	<link href="css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

	<!-- LOAD GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" property="stylesheet" href="vendor/rs-plugin/css/settings.css" type="text/css" media="all" />

	<!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/manual.css"  />
    <!--VENDOR SCRIPT-->
  
    

    <style type="text/css">
  
    </style>

</head>

<body class="wide">
	

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- HEADER -->
		<header id="header" class="header-dark header-transparent">
			<div id="header-wrap">
				<div class="container">

					<!--LOGO-->
					<div id="logo">
						<a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
							<img src="images/logo.png" alt="Polo Logo">
						</a>
					</div>
					<!--END: LOGO-->

					<!--MOBILE MENU -->
					<div class="nav-main-menu-responsive">
						<button class="lines-button x" type="button" data-toggle="collapse" data-target=".main-menu-collapse">
							<span class="lines"></span>
						</button>
					</div>
					<!--END: MOBILE MENU -->

					

					<!--TOP SEARCH -->
					<!--div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
						<form action="search-results-page.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
						</form>
					</div-->
					<!--END: TOP SEARCH -->

					<!--NAVIGATION-->
					<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
						<div class="container">
							<nav id="mainMenu" class="main-menu mega-menu">
								<ul class="main-menu nav nav-pills">
									<li class="dropdown"><a href="index.html"><i class="fa fa-home"></i></a>
									</li>
									<li ><a  data-toggle="modal"  href="#login" >Login</a>
									</li>
									<li><a data-toggle="modal"  href="#register">SignUp</a>
									</li>
									
												
								</ul>
							</nav>
						</div>
					</div>
					<!--END: NAVIGATION-->
				</div>
			</div>
		</header>
		<!-- END: HEADER -->




@yield('sectionimage')
@yield('client')
@yield('blog')
@yield('subscribe')

@yield('aboutus_sectionfullscreen')


@yield('contactus')

@yield('404page')

@yield('terms')
@yield('privacy')
@yield('backimage')
@yield('studentdetails')
@yield('employerdetails')

@yield('studentinfo')
@yield('employerinfo')

@yield('student_account')
@yield('employer_account')

@yield('postjob')



		<!-- FOOTER -->
		<footer class="background-dark text-grey" id="footer">
			<div class="footer-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-logo float-left">
								<img alt="" src="images/logo-sm-dark.png">
							</div>
							<p style="margin-top: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
							</p>

						</div>
					</div>
					<div class="seperator seperator-dark seperator-simple"></div>
					<div class="row">


						<div class="col-md-4">
							<div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map.png'); background-position: 50% 55px; background-repeat: no-repeat">
								<h4 class="widget-title">Contact us</h4>
								<ul class="list-large list-icons">
									<li><i class="fa fa-map-marker"></i>
										<strong>Address:</strong> 795 Folsom Ave, Suite 600
										<br>San Francisco, CA 94107</li>
									<!--li><i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890 </li-->
									<li><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:first.last@example.com">first.last@example.com</a>
									</li>
									<!--li><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
										<br>Saturday, Sunday: <strong>Closed</strong>
									</li-->
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget clearfix ">
								<h4 class="widget-title">Company</h4>
								<ul class="list-footer-company list-medium">
									<li><a href="{{ URL::to('aboutus')}}">Terms & Conditions</a>
										
									</li>
									<li>
										<a href="{{ URL::to('privacy')}}">Privacy Policy</a>
									</li>
									<li>
										<a href="{{ URL::to('aboutus')}}">About Us</a>
									</li>
									<li>
										<a href="{{ URL::to('contactus')}}">Contact us</a>
									</li>



								</ul>

							</div>
						</div>

						<div class="col-md-4">

							<div class="widget clearfix widget-newsletter">
                                <h4 class="widget-title">Company</h4>
								<ul class="list-footer-company list-medium">
									<li><a href="{{ URL::to('terms')}}">Terms & Conditions</a>
										
									</li>
									<li>
										<a href="">FAQ</a>
									</li>
									<li>
										<a href="{{ URL::to('aboutus')}}">About Us</a>
									</li>
									<li>
										<a href="{{ URL::to('contactus')}}">Contact us</a>
									</li>



								</ul>

                                
                            </div>

						</div>



					</div>


				</div>
			</div>
			<div class="copyright-content">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-md-6"> &copy; 2016 BeInterns - All Rights Reserved. 
						</div>
						<div class="col-md-6">
							<div class="social-icons">
								<ul>
									<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
									<li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
									<li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END: FOOTER -->

	</div>
	<!-- END: WRAPPER -->

	<!-- GO TOP BUTTON -->
	<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

<!-- Latest compiled and minified JavaScript -->
  <script src="vendor/jquery/jquery-1.11.2.min.js"></script>
  <script src="vendor/plugins-compressed.js"></script>
<!--script src="js/bootstrap.js" ></script-->

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme-functions.js"></script>

	<!-- Custom js file -->
	<script src="js/custom.js"></script>
	<script src="js/manual.js"></script>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  <style>
  #sortable1, #sortable2 ,#sortable3, #sortable4,#sortable5, #sortable6,#sortable7, #sortable8 {
    border: 1px solid #eee;
    width: 40%;
    min-height: 20px;
    list-style-type: none;
    margin: 0;
    padding: 5px 0 0 0;
    float: left;
    margin-right: 10px;
  }
  #sortable1 li, #sortable2 li ,#sortable3 li , #sortable4 li,#sortable5 li, #sortable6 li,#sortable7 li, #sortable8 li {
    margin: 0 5px 5px 5px;
    padding: 5px;
    font-size: 1.2em;
    width: 100%;
  }
  </style>
  


	<!--All Modals here-->

<div id="register" class="modal  fade" tabindex="-1" role="dialog" data-focus-on="input:first" >
<div class="modal-dialog">
<div class="modal-content" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal-title-site text-center">SignUp</h3>
  </div>
  <div class="modal-body">
   <div class="container">
     <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 ">
      
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 studentsignup_div"><button class="button button-dark rounded"   data-toggle="modal"  href="#signup_student">Student SignUp</button> </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 employersignup_div"><button class="button button-dark rounded"   data-toggle="modal"   href="#signup_employer">Employer SignUp</button></div>
      </div>
     </div>

    </div>
  </div>
  <div class="modal-footer">
    <p class="text-center"> Already a member? <a data-toggle="modal" data-dismiss="modal" href="#login" onclick="clearall();">
                    Log in</a></p>
    
  </div>
</div>
</div>
</div>



<div id="login" class="modal  fade" tabindex="-1" role="dialog" data-focus-on="input:first">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal-title-site text-center">Login</h3>
  </div>
  <div class="modal-body">
   <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 ">
      
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 studentlogin_div"><button class="button button-dark rounded" data-toggle="modal"  href="#login_student">Student Login</button> </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 employerlogin_div"><button class="button button-dark rounded" data-toggle="modal"  href="#login_employer">Employer Login</button></div>
          </div>

        </div>

       </div>
    </div>
  <div class="modal-footer">
    <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal"
                                                            href="#register" >Sign Up</a> <br>
                    <a href="#" >Forgot password?</a></p>
    
  </div>
</div>
</div>
</div>


 
<div id="login_student" class="modal  fade" tabindex="-1" data-focus-on="input:first">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal-title-site text-center">Student Login</h3>
  </div>
  <div class="modal-body">
                <div class="form-group login-username">
                    <div >
                    <label for="login-user-student">Email </label>
                        <input name="log" id="login-user-student" class="form-control input" size="20"
                               placeholder="Enter your email" type="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    <label for="login-password-student">Password</label>
                        <input name="Password" id="login-password-student" class="form-control input" size="20"
                               placeholder="Password" type="password" required>
                    </div>
                </div>
    
  </div>
  <div class="modal-footer">
                    <div>
                        <button name="submit" class="btn-block button button-dark rounded"  type="button"  onclick="login_student_validation();"> <i class="glyphicon glyphicon-off" ></i> LOGIN</button>
                    </div>
  </div>
</div>
</div>
</div>


 
<div id="login_employer" class="modal  fade" tabindex="-1" data-focus-on="input:first">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal-title-site text-center">Employer Login</h3>
  </div>
  <div class="modal-body">
                <div class="form-group login-username">
                    <div >
                    <label for="login-user-employer">Email </label>
                        <input name="log" id="login-user-employer" class="form-control input" size="20"
                               placeholder="Enter your email" type="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    <label for="lgin-password-employer">Password </label>
                        <input name="Password" id="login-password-employer" class="form-control input" size="20"
                               placeholder="Password" type="password" required>
                    </div>
                </div>
  </div>
  <div class="modal-footer">
                    <div>
                        <button name="submit" class="btn-block button button-dark rounded"  type="button"  onclick="login_employer_validation();"> <i class="glyphicon glyphicon-off" ></i> LOGIN</button>
                    </div>
  </div>
</div>
</div>
</div>


<div id="signup_employer" class="modal  fade" tabindex="-1" data-focus-on="input:first" >
<div class="modal-dialog" >
<div class="modal-content" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal-title-site text-center">Employer SignUp</h3>
  </div>
  <div class="modal-body" >
               <div class="form-group login-username">
                    <div >
                       <input name="log" id="fn_signup_employer" class="form-control input" size="20"
                               placeholder="Enter your First Name" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="ln_signup_employer" class="form-control input" size="20"
                               placeholder="Enter Your Last name" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="email_signup_employer" class="form-control input" size="20"
                               placeholder="Enter Your Email" type="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="companyname" class="form-control input" size="20"
                               placeholder="Enter Your Company Name" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="mobile" class="form-control input" size="20"
                               placeholder="Enter Your mobile" type="number" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="pass_signup_employer" class="form-control input" size="20"
                               placeholder="Password" type="password" required>
                    </div>
                </div> 
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="cpass_signup_employer" class="form-control input" size="20"
                               placeholder="Confirm Your Password" type="password" required>
                    </div>
                </div>
                <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input name="rememberme" id="terms_employer" value="forever" checked="checked" type="checkbox">
                                I agree to the <a class="terms--conditions" href="terms-conditions">Terms and Conditions </a></label>
                        </div>
                </div>

  </div>
  <div class="modal-footer">
                    <div>
                        <button name="submit" class="btn-block button button-dark rounded"  type="button" id="signup_btn_employer" onclick="signup_employer_validation();"> <i class="glyphicon glyphicon-off" ></i> SignUp</button>
                    </div>
  </div>
</div>
</div>
</div>



<div id="signup_student" class="modal  fade" tabindex="-1" data-focus-on="input:first" >
<div class="modal-dialog" >
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal-title-site text-center">Student SignUp</h3>
  </div>
  <div class="modal-body" >
                <div class="form-group login-username">
                    <div >
                    
                        <input name="log" id="fn_signup" class="form-control input" size="20"
                               placeholder="Enter your First Name" type="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="ln_signup" class="form-control input" size="20"
                               placeholder="Enter Your Last name" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="email_signup" class="form-control input" size="20"
                               placeholder="Enter Your Email" type="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div >
                    
                        <input name="Password" id="pass_signup" class="form-control input" size="20"
                               placeholder="Password" type="password" required>
                    </div>
                </div> 
                <div class="form-group">
                    <div >
                                            <input name="Password" id="cpass_signup" class="form-control input" size="20"
                               placeholder="Confirm Your Password" type="password" required>
                    </div>
                </div>
                <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input name="rememberme" id="terms" value="forever" checked="checked" type="checkbox">
                                I agree to the <a class="terms--conditions" href="terms-conditions">Terms and Conditions </a></label>
                        </div>
                </div>

  </div>
  <div class="modal-footer">
                    <div>
                        <button name="submit" class="btn-block button button-dark rounded"  type="button" id="signup_btn_student" onclick="signup_student_validation();"> <i class="glyphicon glyphicon-off" ></i> SignUp</button>
                    </div>
  </div>
</div>
</div>
</div>


	<!--All Modals End here-->



</body>

</html>