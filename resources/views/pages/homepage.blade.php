@extends('master_all') 


@section('sectionimage')

		<!-- SECTION IMAGE FULLSCREEN -->
		<section class="halfscreen background-overlay-dark parallax" style="background-image:url(images/parallax/16.gif);" data-stellar-background-ratio="0.5">
			<div class="container-fluid">
				<div class="container-fullscreen">
					<div class="text-middle text-center text-light">
						<!--h3 class="m-b-0">FULLSCREEN</h3-->
						<h2 class="text-lg m-t-0" data-animation="fadeInDown" data-animation-delay="1000">BeInterns</h2>
						<p class="lead" data-animation="fadeInDown" data-animation-delay="1500">Online destinations for interns and employers.</p>
							
				    <div id="homepage_search" data-animation="fadeInDown" data-animation-delay="1700"> 
                      <div class="input-group" id="homepage_form">
                            
                            <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Search Here........" style="background: transparent;">
                            <span class="input-group-btn">
											<a type="submit"  class="btn "><i class="fa fa-search fa-2x" style="color: black !important;"></i></a>
										</span>
                        </div>
					</div>					
					</div>


				</div>
			</div>
		</section>
		<!-- END: SECTION IMAGE FULLSCREEN -->

@stop
	
		
@section('client')

		<div class="seperator p-b-0 p-t-0"><i class="fa fa-chevron-down"></i>
		</div>
		<!-- CLIENTS -->
				<section>
			<div class="container">
				<div class="heading heading-center">
					<h2>Featured Internships</h2>
					<span class="lead">Some of Our awesome internships!</span>
				</div>

				<div class="container">

				 <!--jumbotron image -->

    <div style="background-image:url(/images/carousel2/48.jpg)" class="jumbotron background-pattern text-light background-dark jumbotron-background-image">
      <h3>Featured Internship</h3>
      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <a class="button large transparent effect icon-left" href="#"><span><i class="fa fa-cloud"></i>Internships</span></a> </div>
    <!--END: jumbotron image -->

     <!--jumbotron image -->
    <div style="background-image:url(/images/carousel2/48.jpg)" class="jumbotron background-pattern text-light background-dark jumbotron-background-image">
      <h3>Featured Internship</h3>
      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <a class="button large transparent effect icon-left" href="#"><span><i class="fa fa-cloud"></i>Internships</span></a> </div>
    <!--END: jumbotron image -->

     <!--jumbotron image -->
    <div style="background-image:url(/images/carousel2/48.jpg)" class="jumbotron background-pattern text-light background-dark jumbotron-background-image">
      <h3>Featured Internship</h3>
      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <a class="button large transparent effect icon-left" href="#"><span><i class="fa fa-cloud"></i>Internships</span></a> </div>
    <!--END: jumbotron image -->

    
				</div>

				<div class="container">
				<div class="row">

      <!--jumbotron pattern -->
      <div class="col-md-4">
        <div class="jumbotron jumbotron-small jumbotron-border">
          <h3>Featured Internship</h3>
          <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <a class="button color button-3d rounded effect icon-left" href="#"><span><i class="fa fa-cloud"></i>Internships</span></a> </div>
      </div>
      <!--END: jumbotron pattern --> 
      
      <!--jumbotron pattern -->
      <div class="col-md-4">
        <div class="jumbotron jumbotron-small">
          <h3>Featured Internship</h3>
          <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <a class="button black-light button-3d rounded effect icon-left" href="#"><span><i class="fa fa-cloud"></i>Internships</span></a> </div>
      </div>
      <!--END: jumbotron pattern --> 
      
      <!--jumbotron DEFAULT -->
      <div class="col-md-4">
        <div class="jumbotron jumbotron-small background-colored text-light">
          <h3>Featured Internship</h3>
          <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <a class="button transparent rounded effect icon-left" href="#"><span><i class="fa fa-cloud"></i>Internships</span></a> </div>
      </div>
      
      <!--END: jumbotron DEFAULT --> 

				</div>
				</div>

			</div>

<div class="btn_centered"> 
<a class="button border effect icon-right" href="#"><span><i class="fa fa-arrow-right"></i>All Internships</span></a>
</div>

		</section>
		<!-- CLIENTS -->

@stop

@section('blog')

<!--services-->

<section>
	<div class="container">

		<!--Panels default-->
		<div class="hr-title hr-long center"><abbr>Our Services</abbr>
		</div>
		<div class="row">
			<div class="col-md-4" data-animation="fadeInUp" data-animation-delay="0">
				<div class="panel panel-default">
					<div class="panel-heading">Panel heading without title</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. 
					</div>
				</div>
			</div>
			<div class="col-md-4" data-animation="fadeInUp" data-animation-delay="200">
				<div class="panel panel-default">
					<div class="panel-heading">Panel heading without title</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. 
					</div>
				</div>
			</div>
			<div class="col-md-4" data-animation="fadeInUp" data-animation-delay="400">
				<div class="panel panel-default">
					<div class="panel-heading">Panel heading without title</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. 
					</div>
				</div>
			</div>
			<div class="col-md-4" data-animation="fadeInUp" data-animation-delay="600">
				<div class="panel panel-default">
					<div class="panel-heading">Panel heading without title</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. 
					</div>
				</div>
			</div>
			<div class="col-md-4" data-animation="fadeInUp" data-animation-delay="800">
				<div class="panel panel-default">
					<div class="panel-heading">Panel heading without title</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. 
					</div>
				</div>
			</div>
			<div class="col-md-4" data-animation="fadeInUp" data-animation-delay="1000">
				<div class="panel panel-default">
					<div class="panel-heading">Panel heading without title</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. 
					</div>
				</div>
			</div>
			



		</div>
</div></section>

<!--service ends-->

		<!-- BLOG -->
		<!-- BLOG -->
		<section class="p-b-40 background-grey">
			<div class="container">

				<div class="heading heading text-center">
					<h2>OUR BLOG</h2>
					<span class="lead">We Do Blogging Sometimes!!</span>
				</div>
			</div>

			<div id="blog">
				<div class="container">
					<!-- Blog post-->
					<div class="post-content post-modern post-block post-4-columns">
						<!-- Blog image post-->
						<div class="post-item" data-animation="flipInY" data-animation-delay="0">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/blog/thumb/7.jpg">
								</a>
							</div>
							<div class="post-content-details">
								<div class="post-title">
									<h3><a href="#">Image post example</a></h3>
								</div>
								<div class="post-info">
									<span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
									<span class="post-category">in <a href="#">Productivity</a></span>
								</div>
								<div class="post-description">
									<p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit.</p>

									<div class="post-info">
										<a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>

							<div class="post-meta">
								<div class="post-date">
									<span class="post-date-day">19</span>
									<span class="post-date-month">January</span>
									<span class="post-date-year">2015</span>
								</div>

								<div class="post-comments">
									<a href="#">
										<i class="fa fa-comments-o"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
								<div class="post-comments">
									<a href="#">
										<i class="fa fa-share-alt"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
							</div>
						</div>
						<!-- Blog slider post-->
						<div class="post-item" data-animation="flipInY" data-animation-delay="200">

							<div class="post-image">
								<a href="#">
									<img alt="" src="images/blog/thumb/8.jpg">
								</a>
							</div>

							<div class="post-content-details">
								<div class="post-title">
									<h3><a href="#">Slider post demo</a></h3>
								</div>
								<div class="post-info">
									<span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
									<span class="post-category">in <a href="#">Productivity</a></span>
								</div>
								<div class="post-description">
									<p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit.

									</p>

									<div class="post-info">
										<a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="post-meta">
								<div class="post-date">
									<span class="post-date-day">16</span>
									<span class="post-date-month">January</span>
									<span class="post-date-year">2015</span>
								</div>

								<div class="post-comments">
									<a href="#">
										<i class="fa fa-comments-o"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
								<div class="post-comments">
									<a href="#">
										<i class="fa fa-share-alt"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
							</div>
						</div>
						<!-- Blog image post-->
						<div class="post-item" data-animation="flipInY" data-animation-delay="400">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/blog/thumb/9.jpg">
								</a>
							</div>
							<div class="post-content-details">
								<div class="post-title">
									<h3><a href="#">Image post example</a></h3>
								</div>
								<div class="post-info">
									<span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
									<span class="post-category">in <a href="#">Productivity</a></span>
								</div>
								<div class="post-description">
									<p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit.

									</p>

									<div class="post-info">
										<a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>

							<div class="post-meta">
								<div class="post-date">
									<span class="post-date-day">14</span>
									<span class="post-date-month">February</span>
									<span class="post-date-year">2015</span>
								</div>

								<div class="post-comments">
									<a href="#">
										<i class="fa fa-comments-o"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
								<div class="post-comments">
									<a href="#">
										<i class="fa fa-share-alt"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
							</div>
						</div>
						<!-- Blog image post-->
						<div class="post-item" data-animation="flipInY" data-animation-delay="0">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/blog/thumb/12.jpg">
								</a>
							</div>
							<div class="post-content-details">
								<div class="post-title">
									<h3><a href="#">Image post example</a></h3>
								</div>
								<div class="post-info">
									<span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
									<span class="post-category">in <a href="#">Productivity</a></span>
								</div>
								<div class="post-description">
									<p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit.</p>

									<div class="post-info">
										<a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>

							<div class="post-meta">
								<div class="post-date">
									<span class="post-date-day">19</span>
									<span class="post-date-month">January</span>
									<span class="post-date-year">2015</span>
								</div>

								<div class="post-comments">
									<a href="#">
										<i class="fa fa-comments-o"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
								<div class="post-comments">
									<a href="#">
										<i class="fa fa-share-alt"></i>
										<span class="post-comments-number">324</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END: Blog post-->
				</div>
			</div>
		
		<!-- END: BLOG -->
	<div class="btn_centered">
      <a class="button border effect icon-right" href="{{ URL::to('blog')}}"><span><i class="fa fa-arrow-right"></i>Go to Blog</span></a>
    </div>
	</section>		
		<!-- END: BLOG -->
		<!-- END: BLOG -->



@stop


@section('subscribe')

        <!-- Subscribe form -->
        <section class="background-colored text-center p-t-80  p-b-30">
            <div class="container">
                <div class="widget clearfix widget-newsletter">
                    <form id="widget-subscribe-form" action="#" role="form" method="post" class="form-inline">
                        <h3 class="text-light">Subscribe to our Newsletter</h3>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                            <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <span class="input-group-btn">
											<button type="submit" id="widget-subscribe-submit-button" class="btn btn-white">Subscribe</button>
										</span>
                        </div>
                        <small class="text-light">Stay informed on our latest news!</small>
                    </form>
                    <script type="text/javascript">
                        jQuery("#widget-subscribe-form").validate({
                            submitHandler: function(form) {
                                jQuery(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function(text) {
                                        if (text.response == 'success') {
                                            $.notify({
                                                message: "You have successfully subscribed to our mailing list."
                                            }, {
                                                type: 'success'
                                            });
                                            $(form)[0].reset();

                                        } else {
                                            $.notify({
                                                message: text.message
                                            }, {
                                                type: 'warning'
                                            });
                                        }
                                    }
                                });
                            }
                        });

                    </script>
                </div>
            </div>
        </section>
        <!-- End: Subscribe form -->

@stop


