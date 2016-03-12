@extends('master_all')

@section('backimage')
<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/student_2.jpg'); background-size: cover; min-height:370px;" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1 data-animation="fadeInDown" data-animation-delay="500">Post a Job </h1>
            <span>Post your required job here</span>
        </div>
        
    </div> <!--container-->


</section>
<!-- END: PAGE TITLE -->
@stop


@section('postjob')
<section id="postjob">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				                    <div class="form-group required">
                                        <label for="InputName">Title <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Title">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Category</label>
                                        <select class="form-control">
                                          <option>Type 1</option>
                                          <option>Type 2</option>
                                          <option>Type 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Skills</label>
                                        <select class="form-control">
                                          <option>Type 1</option>
                                          <option>Type 2</option>
                                          <option>Type 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Type Of Internship</label>
                                        <select class="form-control">
                                          <option>Type 1</option>
                                          <option>Type 2</option>
                                          <option>Type 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Responsiblity <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Responsibility">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Requirements <sup>*</sup> </label>
                                        <input required type="numtextber" class="form-control" name='name1' id="InputName"
                                               placeholder="Requirements">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Location</label>
                                        <select class="form-control">
                                          <option>Location 1</option>
                                          <option>Location 2</option>
                                          <option>Location 3</option>
                                        </select>
                                    </div>

			</div><!--end col-->

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				                    <div class="form-group required">
                                        <label for="InputName">Start Date<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="Start Date ">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Application Deadline<sup>*</sup> </label>
                                        <input required type="date" class="form-control" name='name1' id="InputName"
                                               placeholder="Application DeadLine ">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Duration<sup>*</sup> </label>
                                        <input required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Duration ">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Stipend</label>
                                        <select class="form-control">
                                          <option>List 1</option>
                                          <option>List 2</option>
                                          <option>List 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Positions<sup>*</sup> </label>
                                        <input required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Number of Positions">
                                    </div>
                                    <div class="form-group required">
                                        <label for="InputName">Additional Info<sup>*</sup> </label>
                                        <textarea required type="text" class="form-control" name='name1' id="InputName"
                                               placeholder="Additional Information "></textarea>
                                    </div>
			</div><!--end col-->

		</div><!--row-->
		<a class="btn btn-primary pull-right btn-large" href="">Post Job</a>
	</div><!--container-->

</section>
@stop