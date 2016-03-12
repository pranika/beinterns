@extends('master_all') 

@section('backimage')
<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/student_2.jpg'); background-size: cover; min-height:370px;" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Student Details</h1>
            <span>Complete Your Profile</span>
        </div>
        
    </div> <!--container-->


</section>
<!-- END: PAGE TITLE -->
@stop

@section('studentinfo')
<section>
<div class="container">


<div class="accordion  fancy radius clean">
<!-- About me starts-->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-rocket fa-2x"></i>About Me</h5>
				<div class="ac-content">
				     <div class="container">
				     	<div class="row">
			     		

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			<div class="form-group required">
                                        <label for="InputName">Mobile <sup>*</sup> </label>
                                        <input required type="number" class="form-control" name='name1' id="InputName"
                                               placeholder="Mobile">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Date Of Birth<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="Date Of Birth ">
                                    </div>
                                    <!--div class="form-group reg-gender">
                                    <label for="InputName">Gender <sup>*</sup> </label>
                                       <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
                                          </label>
                                          <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
                                          </label>
                                    </div-->
                                     <div class="form-group required">
                                        <label for="InputName">Gender</label>
                                        <select class="form-control">
                                          <option>Male</option>
                                          <option>Female</option>
                                          
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Nationality <sup>*</sup> </label>
                                        <select class="form-control">
                                          <option>Indian</option>
                                          <option>American</option>
                                          <option>British</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Current Location <sup>*</sup> </label>
                                        <select class="form-control">
                                          <option>Dubai</option>
                                          <option>Abu Dhabi</option>
                                          
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Visa Status <sup>*</sup> </label>
                                        <select class="form-control">
                                          <option>Active</option>
                                          <option>InActive</option>
                                          
                                        </select>
                                    </div>
				     		</div><!--col-lg-6-->

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			 <div class="image-box"> <img src="images/team/1.jpg" alt=""> </div>

				     			    <div class="form-group required">
                                      

                                        <label class="control-label">Select Image<sup>*</sup></label>
                                        <input id="input-1" type="file" class="file">                           </div>
                                        
				     				<div class="form-group required">
                                        <label for="InputName">Description </label>
                                        <textarea required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Description "></textarea>
                                    </div>
                                    
				     			
				     		</div><!--col-lg-6-->

				     	</div><!--row-->
				     </div><!--container-->
<a class="btn btn-primary pull-right btn-large" href="">Save</a>
				</div>
			</div>

<!--About me ends -->

<!--Educations starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-graduation-cap fa-2x"></i>Education</h5>
				<div class="ac-content">
				     <div class="container">
				     	<div class="row">
			     		

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			<div class="form-group required">
                                        <label for="InputName">University/College <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Enter your college/university">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Degree Level<sup>*</sup> </label>
                                        <select class="form-control">
                                          <option>Under Graduate(UG)</option>
                                          <option>Post Graduate(PG)</option>
                                          <option>Doctorate(PhD)</option>
                                          
                                        </select>
                                    </div>
                                   <div class="form-group required">
                                        <label for="InputName">Degree Type<sup>*</sup> </label>
                                        <select class="form-control">
                                          <option>Engineering</option>
                                          <option>Arts</option>
                                          <option>Science</option>
                                          <option>Medical</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Major(s) <sup>*</sup> </label>
                                        <input required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Major">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Specialisation <sup>*</sup> </label>
                                        <input required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Specialisation">
                                    </div>
                                     <div class="form-group required">
                                        <label for="InputName">Start Date<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="Start Date ">
                                    </div>
                                     <div class="form-group required">
                                        <label for="InputName">End Date<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="End date">
                                    </div>
                                    <div class="form-group required">
                                        <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" value="option1"> Present
                                        </label>
                                    </div>



				     		</div><!--col-lg-6-->

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			
				     			    <div class="form-group required">
                                        <label class="control-label">Performance</label>
                                        <input  type="text" class="file">                           
                                    </div>
				     				<div class="form-group required">
                                        <label for="InputName">Additional Description </label>
                                        <textarea required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Description "></textarea>
                                    </div>
                                    
				     			
				     		</div><!--col-lg-6-->
                        
				     	</div><!--row-->

				     </div><!--container-->
<a class="btn btn-primary pull-right btn-large" href="">Save</a>
				</div>
			</div>
<!--Educations ends -->

<!--Certification starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-certificate fa-2x"></i>Certification</h5>
				<div class="ac-content">
				     <div class="container">
				     	<div class="row">
			     		

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			<div class="form-group required">
                                        <label for="InputName">Certificate Name <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Certificate Name">
                                    </div>
                                  <div class="form-group required">
                                        <label for="InputName">Certificate Institution <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Certificate Institution">
                                    </div>
                                     <div class="form-group required">
                                        <label for="InputName">Serial Number </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Certificate Serial Number">
                                    </div>

                                    

				     		</div><!--col-lg-6-->

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			
				     			    <div class="form-group required">
                                        <label for="InputName">Start Date<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="Start Date ">
                                    </div>
                                     <div class="form-group required">
                                        <label for="InputName">End Date<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="End date">
                                    </div>
                                    <div class="form-group required">
                                        <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" value="option1"> Present
                                        </label>
                                    </div>
				     				<div class="form-group required">
                                        <label for="InputName">Additional Description </label>
                                        <textarea required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Description "></textarea>
                                    </div>
                                    
				     			
				     		</div><!--col-lg-6-->

				     	</div><!--row-->
				     </div><!--container-->
<a class="btn btn-primary pull-right btn-large" href="">Save</a>
				</div>
			</div>
<!--Certification ends -->

<!--Experience starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-shopping-cart fa-2x"></i>Experience</h5>
				<div class="ac-content">
				     <div class="container">
				     	<div class="row">
			     		

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			<div class="form-group required">
                                        <label for="InputName">Job Title <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Job Title">
                                    </div>
                                  <div class="form-group required">
                                        <label for="InputName">Company Name <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Company Name">
                                    </div>
                                     <div class="form-group required">
                                        <label for="InputName">Location  </label>
                                        <select class="form-control">
                                          <option>Dubai</option>
                                          <option>Abu Dhabi</option>
                                          
                                        </select>
                                    </div>

                                    

				     		</div><!--col-lg-6-->

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			
				     			    <div class="form-group required">
                                        <label for="InputName">Start Date<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="Start Date ">
                                    </div>
                                     <div class="form-group required">
                                        <label for="InputName">End Date<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="End date">
                                    </div>
                                    <div class="form-group required">
                                        <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" value="option1"> Present
                                        </label>
                                    </div>
				     				<div class="form-group required">
                                        <label for="InputName">Additional Description </label>
                                        <textarea required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Description "></textarea>
                                    </div>
                                    
				     			
				     		</div><!--col-lg-6-->

				     	</div><!--row-->
				     </div><!--container-->
<a class="btn btn-primary pull-right btn-large" href="">Save</a>
				</div>
			</div>
<!--Experience ends -->

<!--Skills starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-trophy fa-2x"></i>Skills</h5>
				<div class="ac-content">
				                  <div class="form-group required">
                                        <label for="InputName">Skills<sup>*</sup> </label>
                                        <select class="form-control">
                                          <option>Web Developer </option>
                                          <option>App Developer</option>
                                          <option>Full Stack Developer</option>
                                          <option>Back End Developer</option>
                                        </select>
                                    </div>
                                    <a class="btn btn-primary pull-right btn-large" href="">Save</a>

				</div>
			</div>
<!--Skills End -->

<!--Additional Info starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-plus fa-2x" ></i>Additional Info</h5>
				<div class="ac-content">
				     <div class="container">
				     	<div class="row">
			     		

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			<div class="form-group required">
                                        <label for="InputName">Lanuguage <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Languages Known">
                                    </div>
                                  <div class="form-group required">
                                        <label for="InputName">Activites </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Activities">
                                    </div>
                                     

                                    

				     		</div><!--col-lg-6-->

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			
				     			    <div class="form-group required">
                                        <label for="InputName">Achievements </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="Achievements">
                                    </div>
                                    
                                    
				     							     			
				     		</div><!--col-lg-6-->

				     	</div><!--row-->
				     </div><!--container-->
<a class="btn btn-primary pull-right btn-large" href="">Save</a>
				</div>
			</div>
<!--Additional Info ends -->

<!--Links starts -->
      <div class="ac-item">
        <h5 class="ac-title"><i class="fa fa-external-link fa-2x"></i>Links</h5>
        <div class="ac-content">
                   <div class="row">
                   <div class="col-lg-6 " id="links_fields_student">
                                    <div class="form-group required">
                                        <label for="InputName">Links</label>
                                        <select class="form-control">
                                          <option>Facebook</option>
                                          <option>Twitter</option>
                                          <option>LinkedIn</option>
                                          <option>Blog</option>
                                          <option>Portfolio Website</option>
                                          <option>Behance</option>
                                          <option>Other</option>
                                        </select>
                                    </div>
                     </div>              
                     <div class="col-lg-6" id="links_url_student"> 
                                   <div class="form-group required">
                                        <label for="InputName">URl</label>
                                        
                                        <input required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="URL Here">
                                    </div>
                       </div>           
                                 
                              
                      </div>
                      <a class="btn btn-primary  btn-large" id="morelinks_student" href="">Add More</a> 
                       <a class="btn btn-primary pull-right btn-large" href="">Save</a> 
        </div>
      </div>
<!--Links ends -->

<!--Preferences starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-paper-plane fa-2x"></i>Preferences</h5>
				<div class="ac-content">
         <div class="container">
           <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="Byindustry">
             <h1>Preferences By Industry</h1>
               <ul id="sortable1" class="connectedSortable">
                 <li class="ui-state-default">Item 1</li>
                 <li class="ui-state-default">Item 2</li>
                 <li class="ui-state-default">Item 3</li>
                 <li class="ui-state-default">Item 4</li>
                 <li class="ui-state-default">Item 5</li>
                </ul>
 
                <ul id="sortable2" class="connectedSortable">
                 <li class="ui-state-highlight">Item 1</li>
                 <li class="ui-state-highlight">Item 2</li>
                 <li class="ui-state-highlight">Item 3</li>
                 <li class="ui-state-highlight">Item 4</li>
                 <li class="ui-state-highlight">Item 5</li>
                </ul>
             </div>

             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="bycity">
             <h1>Preferences By City</h1>
               <ul id="sortable3" class="connectedSortable2">
                 <li class="ui-state-default">Item 1</li>
                 <li class="ui-state-default">Item 2</li>
                 <li class="ui-state-default">Item 3</li>
                 <li class="ui-state-default">Item 4</li>
                 <li class="ui-state-default">Item 5</li>
                </ul>
 
                <ul id="sortable4" class="connectedSortable2">
                 <li class="ui-state-highlight">Item 1</li>
                 <li class="ui-state-highlight">Item 2</li>
                 <li class="ui-state-highlight">Item 3</li>
                 <li class="ui-state-highlight">Item 4</li>
                 <li class="ui-state-highlight">Item 5</li>
                </ul>
             </div>

             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="byduration">
             <h1>Preferences By Duration</h1>
               <ul id="sortable5" class="connectedSortable3">
                 <li class="ui-state-default">Item 1</li>
                 <li class="ui-state-default">Item 2</li>
                 <li class="ui-state-default">Item 3</li>
                 <li class="ui-state-default">Item 4</li>
                 <li class="ui-state-default">Item 5</li>
                </ul>
 
                <ul id="sortable6" class="connectedSortable3">
                 <li class="ui-state-highlight">Item 1</li>
                 <li class="ui-state-highlight">Item 2</li>
                 <li class="ui-state-highlight">Item 3</li>
                 <li class="ui-state-highlight">Item 4</li>
                 <li class="ui-state-highlight">Item 5</li>
                </ul>
             </div>

             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="bystipend">
             <h1>Preferred Stipend</h1>
               <ul id="sortable7" class="connectedSortable4">
                 <li class="ui-state-default">Item 1</li>
                 <li class="ui-state-default">Item 2</li>
                 <li class="ui-state-default">Item 3</li>
                 <li class="ui-state-default">Item 4</li>
                 <li class="ui-state-default">Item 5</li>
                </ul>
 
                <ul id="sortable8" class="connectedSortable4">
                 <li class="ui-state-highlight">Item 1</li>
                 <li class="ui-state-highlight">Item 2</li>
                 <li class="ui-state-highlight">Item 3</li>
                 <li class="ui-state-highlight">Item 4</li>
                 <li class="ui-state-highlight">Item 5</li>
                </ul>
             </div>

             
           </div>
         </div>
        
				</div>
			</div>
<!--Preferences ends -->			

<!--Documents starts-->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-shopping-cart fa-2x"></i>Documents</h5>
				<div class="ac-content">
				                      <div class="form-group required">
                                        <label class="control-label">Upload Resume<sup>*</sup></label>
                                        <input id="input-1" type="file" class="file" placeholder="Upload your resume here">                           </div>
                                        <a class="btn btn-primary pull-right btn-large" href="">Save</a>
				</div>
			</div>
<!-- Documents ends-->

		</div><!--accordion toogle fancy radius clean-->
	</div><!--container-->
  <div > <button type="button" class="btn btn-primary  pull-right ">Save Profile</button></div>
	</section>


  


@stop