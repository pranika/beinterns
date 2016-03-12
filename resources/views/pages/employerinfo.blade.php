@extends('master_all') 

@section('backimage')
<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/student_2.jpg'); background-size: cover; min-height:370px;" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Employer Details</h1>
            <span>Complete Your Profile</span>
        </div>
        
    </div> <!--container-->


</section>
<!-- END: PAGE TITLE -->
@stop

@section('employerinfo')
<section>
<div class="container">


<div class="accordion  fancy radius clean">
<!-- About Company starts-->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-rocket fa-2x"></i>About Company</h5>
				<div class="ac-content">
				     <div class="container">
				     	<div class="row">
			     		

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  {!!Form::open(array('url' => './company_details', 'method' => 'post'))!!}
				     			<div class="form-group required">
                <label for="InputName">Description(50-60 words) <sup>*</sup> </label>
                <textarea required type="number" class="form-control" name='brief' id='brief'
                                               placeholder="Short Description"></textarea>
                                    </div>
                                   
                                   
                                     <div class="form-group required">
                                        <label for="InputName">Industry</label>
                                        <select name='industry' id='industry' class="form-control">
                                          <option>Type A</option>
                                          <option>Type B</option>
                                          <option>Type C</option>
                                          <option>Type D</option>
                                          
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Company Type</label>
                                        <select name='company' name='company' class="form-control">
                                          <option>Type A</option>
                                          <option>Type B</option>
                                          <option>Type C</option>
                                          <option>Type D</option>
                                          
                                        </select>
                                    </div>
                                     <div class="form-group required">
                                        <label for="InputName">Established<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='start' id="start"
                                               placeholder="Established ">
                                    </div>
                                    
				     		</div><!--col-lg-6-->

				     		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				     			<div class="image-box"> <img src="images/team/1.jpg" alt=""> </div>

				     			    <div class="form-group required">
                                        <label class="control-label">Select Image<sup>*</sup></label>
                                        <input id="input-1" type="file" class="file">                           </div>
				     				<div class="form-group required">
                                        <label for="InputName">Detailed Description </label>
                                        <textarea required type="text" class="form-control" name='full' id="full"
                                               placeholder="Detailed Description "></textarea>
                                    </div>
                                    
				     			
				     		</div><!--col-lg-6-->

				     	</div><!--row-->
				     </div><!--container-->
<input type='submit' class="btn btn-primary pull-right btn-large" >
				</div>
			</div>
      {!! Form::close() !!}
<!--About company ends -->

<!--location starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-graduation-cap fa-2x"></i>Location</h5>
				<div class="ac-content">
				     <div class="container">
				     	<div class="row">
			     		

				     		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {!!Form::open(array('url' => './company_address', 'method' => 'post'))!!}
				     			<div class="form-group required">
                                        <label for="InputName">Address <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='address' id="InputName"
                                               placeholder="Address Line 1">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Address Line 2 </label>
                                        <input required type="numtextber" class="form-control" name='line2' id="InputName"
                                               placeholder="Address Line 2">
                                    </div>
                                   
                                   <div class="form-group required">
                                        <label for="InputName">City <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='city' id="InputName"
                                               placeholder="City">
                                    </div>

                                    <div class="form-group required">
                                        <label for="InputName">Country <sup>*</sup> </label>
                                        <input required type="text" class="form-control" name='country' id="InputName"
                                               placeholder="Country">
                                    </div>
                                    
				     		</div><!--col-lg-12-->

                        
				     	</div><!--row-->

				     </div><!--container-->
<a class="btn btn-primary pull-right btn-large" href="">Save</a>
				</div>
			</div>
      {!! Form::close() !!}
<!--Location ends -->

<!--Links starts -->
			<div class="ac-item">
				<h5 class="ac-title"><i class="fa fa-external-link fa-2x"></i>Links</h5>
				<div class="ac-content">
				           <div class="row">
                   <div class="col-lg-6 " id="links_fields_employer">
				                            <div class="form-group required">
                                        <label for="InputName">Links</label>
                                        <select class="form-control">
                                          <option>Facebook</option>
                                          <option>Twitter</option>
                                          <option>LinkedIn</option>
                                          <option>Blog</option>
                                          <option>Official Website</option>
                                          <option>Behance</option>
                                          <option>Other</option>
                                        </select>
                                    </div>
                     </div>              
                     <div class="col-lg-6" id="links_url_employer"> 
                                   <div class="form-group required">
                                        <label for="InputName">URl</label>
                                        
                                        <input required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="URL Here">
                                    </div>
                       </div>           
                                 
                              
                      </div>
                      <a class="btn btn-primary  btn-large" id="morelinks_employer" href="">Add More</a> 
                       <a class="btn btn-primary pull-right btn-large" href="">Save</a> 
				</div>
			</div>
<!--Links ends -->



		</div><!--accordion toogle fancy radius clean-->

	</div><!--container-->

	<div > <button type="button" class="btn btn-primary  pull-right ">Save Profile</button></div>
	</section>

@stop

