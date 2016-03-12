@extends('master_all') 

@section('studentdetails')

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/student_2.jpg'); background-size: cover; min-height:370px;" data-stellar-background-ratio="0.5">
    <div class="container">
        <!--div class="page-title col-md-8">
            <h1>Student Details</h1>
            <span>Subtext for page title. Lorem ipsum viverra a!</span>
        </div-->
        
    </div> <!--container-->


</section>
<!-- END: PAGE TITLE -->

<!--div for image portfolio & des-->
<div class="mj_pagetitle_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mj_mainheading">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mj_joblogo">
                                        <img src="images/student.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="mj_pageheading mj_toppadder50">
                                        <h1>Jonn Doe</h1>
                                        <ul>
                                            <li>
                                                <label><i class="fa fa-map-marker"></i>
                                                </label><a href="#">San Francisco</a>
                                            </li>
                                            <li>
                                                <label>Classification:</label><a href="#">UX / Interaction Designer</a>
                                            </li>
                                            <li>
                                                <label>Hourly Rate: </label><label class="mj_green_text">$40.00/hr</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--div ends for image portfolio & des-->

<div class="mj_lightgraytbg mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                    <div class="mj_social_media_section mj_candidatepage_media mj_toppadder40 mj_bottompadder40">
                        <ul>
                            <li><a href="contact.html" class="btn btn-primary" data-text="Contact Candidate"><span>Contact Candidate</span></a>
                            </li>
                            <li><a href="#" class="btn btn-danger" data-text="Bookmark this Resume"><span>Bookmark this Resume</span></a>
                            </li>
                        </ul>
                        <p><a href="#"><i class="fa fa-download"></i></a>
                        </p>
                        <p><a href="#"><i class="fa fa-print"></i></a>
                        </p>
                        <p><a href="#"><i class="fa fa-share-alt"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
   </div>     



<section class="student_portfolio_tabs">
    <div class="container">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                <!--Horizontal tabs default-->
                <div id="tabs-003" class="tabs simple">
                    <h3>Intern Portfolio</h3>
                    <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam auam quaerat voluptatem.</p>
                    <ul class="tabs-navigation">
                        <li class="active"><a href="#About003"><i class="fa fa-home"></i>Basic Details</a> </li>
                        <li><a href="#Services003"><i class="fa fa-home"></i>Education</a> </li>
                        <li><a href="#Choose003"><i class="fa fa-home"></i>Certification</a> </li>
                        <li><a href="#Assets003"><i class="fa fa-home"></i>Experience</a> </li>
                        <li><a href="#Assets003"><i class="fa fa-home"></i>Skills</a> </li>
                        <li><a href="#Assets003"><i class="fa fa-home"></i>Links & Additional Info</a> </li>
                        <li><a href="#Assets003"><i class="fa fa-home"></i>Preferences</a> </li>
                        <li><a href="#Assets003"><i class="fa fa-home"></i>Resume</a> </li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab-pane active" id="About003">
                            <h4>About Us</h4>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        </div>
                        <div class="tab-pane" id="Services003">
                            <h4>Services</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        </div>
                        <div class="tab-pane" id="Choose003">
                            <h4>Services</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        </div>
                        <div class="tab-pane" id="Assets003">
                            <h4>Services</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                        </div>
                    </div>
                </div>
                <!--END: Horizontal tabs default-->
                <hr class="space">
                <!--Horizontal tabs clean -->

                </div>

    </div>
</section>
@stop