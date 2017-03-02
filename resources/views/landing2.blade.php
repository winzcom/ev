@extends('layouts.applayout')

@section('content')
    
	<!-- intro section START -->
	<section class="landing-intro horizontal-form" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<section class="form-elements">
						<p class="slide-sub-title light-color wow fadeInUp" data-wow-delay="0.5">Receive Tailored Quotes from  vendors round you with a single request.</p>
						<h3 class="slide-title light-color wow fadeInUp" data-wow-delay="1s">eVenting</h3>
						<div class="form-wrapper">
							<form id = "start_request">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" class="form-control input-lg" id="yourName" placeholder="State" >
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" class="form-control input-lg" id="yourEmail" placeholder="Locality"  class="">
										</div>
									</div>
									<!--<div class="col-md-3">
										<div class="form-group">
											<input type="text" class="form-control input-lg" id="yourProfession" placeholder="Category">
										</div>
									</div>-->
									<div class="col-md-3">
										<button type="submit" 
											class="btn btn-primary btn-lg btn-block start"
											data-toggle="modal" data-target="#myModal"
										>
												Start
										</button>
									</div>
								</div>
							</form>
						</div>
					</section>
					<small class="form-disclaimer light-color"><strong></strong></small>
				</div>
			</div>
		</div>
		
		<a href="#features" class="arrow bounce" title="Scroll Down"><i class="fa fa-angle-down"></i></a>
		
	</section>
	<!-- intro section END -->
	
	<!-- section START -->
	<section class="section" id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="section-header">
						<i class="icon-briefcase wow fadeInUp" data-wow-delay="0.5s"></i>
						<h1>How it works</h1>
						<p class="lead em">Giving you a better vendor sourcing experience</p>
					</div>
					
					<!-- optional spacer classes "spacer-10" "spacer-20" "spacer-30" upto "spacer-80" -->
					<hr class="spacer-30">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box style7">
						<i class="livicon" data-name="umbrella" data-color="#2ECC71" data-hovercolor="false" data-size="48" data-onparent="true"></i>
						<h4 class="box-title strong">Make a request</h4>
						<p>Make a request with our simple form flow</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box style7">
						<i class="livicon" data-name="sitemap" data-color="#F1C40F" data-hovercolor="false" data-size="48" data-onparent="true"></i>
						<h4 class="box-title strong">Receive Quotes</h4>
						<p>Receive quotes from Vendors</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box style7">
						<i class="livicon" data-name="star-full" data-color="#E74C3C" data-hovercolor="false" data-size="48" data-onparent="true"></i>
						<h4 class="box-title strong">Compare</h4>
						<p>Compare prices from  vendors and hire the best</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section END -->
	
	<!-- section START -->
		
	<!-- section END -->
	
	<!-- section START -->
		<!--<section class="section half-section-left">
			<div class="section-bg bg6 hidden-xs">
				<a title="How we doing" class="nivo-lightbox play-btn cbutton cbutton--effect-ivana wow fadeInUp" data-wow-delay="0.5s" href="http://vimeo.com/70301553"><i class="fa fa-play"></i></a>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-6">
						<div class="overlay">
							<h2>Section with video block on left</h2>
							<p class="lead alt-font">Etiam placerat commodo feugiat. Proin in quam erat. Duis sed porttitor magna, a laoreet enim.</p>
							<p>Morbi pulvinar sagittis ipsum sed posuere. Sed et interdum nibh. Duis tristique massa non est hendrerit vehicula. Fusce rutrum lorem luctus blandit ultricies. Aliquam auctor mi ac odio sollicitudin sollicitudin. </p>
							<a class="btn btn-danger">Learn More</a>
						</div>				
					</div>
				</div>
			</div>
		</section>-->
	<!-- section END -->
	
	<!-- section START -->
	<section class="section gray-bg" id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
					<div class="section-header text-center">
						<i class="icon-chat"></i>
						<h2 class="h1">Don't Take Our Word For It...</h2>
						<hr class="spacer-30">
					</div>
					
					<div class="row">
						<div class="col-sm-6">
							
							<!-- testimonial style2 START -->
							<div class="testimonials-style2">
								<div class="quote">
									Vestibulum nisl viverra lacus euismod vehicula. Nullam condimentum id libero sollicitudin, at vestibulum ex finibus.
								</div>
								<div class="cst-name">
									<img src="{{asset('img/authors/author8.jpg')}}" alt="John Doe">
									<span class="text-uppercase alt-color">John Doe</span>
									<br><abbr title="Chief Ececutive Officer" class="initialism">CEO</abbr> ABC Inc.
								</div>
							</div>
							<!-- testimonial style2 END -->
							
						</div>
						<div class="col-sm-6">
							
							<!-- testimonial style2 START -->
							<div class="testimonials-style2">
								<div class="quote">
									Vestibulum nisl viverra lacus euismod vehicula. Nullam condimentum id libero sollicitudin, at vestibulum ex finibus.
								</div>
								<div class="cst-name">
									<img src="{{asset('img/authors/author5.jpg')}}" alt="John Doe">
									<span class="text-uppercase alt-color">John Doe</span>
									<br><abbr title="Chief Ececutive Officer" class="initialism">CEO</abbr> ABC Inc.
								</div>
							</div>
							<!-- testimonial style2 END -->
							
						</div>
					</div>	
					
					<div class="row">
						<div class="col-sm-4">
							
							<!-- testimonial style2 START -->
							<div class="testimonials-style2">
								<div class="quote">
									Vestibulum nisl viverra lacus euismod vehicula. Nullam condimentum id libero sollicitudin, at vestibulum ex finibus.
								</div>
								<div class="cst-name"><span>John Doe</span> - <abbr title="Chief Ececutive Officer" class="initialism">CEO</abbr> ABC Inc.</div>
							</div>
							<!-- testimonial style2 END -->
							
						</div>
						<div class="col-sm-4">
							
							<!-- testimonial style2 START -->
							<div class="testimonials-style2">
								<div class="quote">
									Vestibulum nisl viverra lacus euismod vehicula. Nullam condimentum id libero sollicitudin, at vestibulum ex finibus.
								</div>
								<div class="cst-name"><span>John Doe</span> - <abbr title="Chief Ececutive Officer" class="initialism">CEO</abbr> ABC Inc.</div>
							</div>
							<!-- testimonial style2 END -->
							
						</div>
						<div class="col-sm-4">
							
							<!-- testimonial style2 START -->
							<div class="testimonials-style2">
								<div class="quote">
									Vestibulum nisl viverra lacus euismod vehicula. Nullam condimentum id libero sollicitudin, at vestibulum ex finibus.
								</div>
								<div class="cst-name"><span>John Doe</span> - <abbr title="Chief Ececutive Officer" class="initialism">CEO</abbr> ABC Inc.</div>
							</div>
							<!-- testimonial style2 END -->
							
						</div>
					</div>		
							
				</div>
			</div>
		</div>
	</section>
	<!-- section END -->
	
	<!-- section START -->
	<!--<section class="section" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="section-header">
						<i class="icon-basket wow fadeInUp" data-wow-delay="0.5s"></i>
						<h1>Simple &amp; Transparent Pricing</h1>
					</div>-->
					
					<!-- optional spacer classes "spacer-10" "spacer-20" "spacer-30" upto "spacer-80" -->
					<!--<hr class="spacer-30">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="plan style2">
						<div class="plan-header bg-info">
							<i class="livicon" data-name="star-full" data-color="#fff" data-hovercolor="#fff" data-size="48"></i>
							<h4 class="title">Basic Plan</h4>
							<h2 class="price"><sup>$</sup><strong>13</strong>.<sup>99</sup> <small>/month</small></h2>
						</div>
						<div class="plan-features">
							<ul class="features-list">
								<li>bandwidth <i class="ion-ios-infinite alt-color" data-toggle="tooltip" title="There is no restriction on bandwidth usage"></i></li>
								<li>disk storage <strong class="alt-color" data-toggle="tooltip" title="Scalable upto 50TB">10GB</strong></li>
								<li>websites <strong>1</strong></li>
								<li>domain name <strong class="alt-color" data-toggle="tooltip" title="You will get one domain free of charge for lifetime">free</strong></li>
								<li><i class="fa fa-close text-danger"></i></li>
								<li><i class="fa fa-close text-danger"></i></li>
							</ul>
						</div>
						<div class="plan-footer">
							<a href="javascript:void(0);" class="btn btn-info" title="Start your basic plan">Start Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="plan style2">
						<div class="plan-header bg-warning">
							<i class="livicon" data-name="clock" data-color="#fff" data-hovercolor="#fff" data-size="48"></i>
							<h4 class="title">Regular Plan</h4>
							<h2 class="price"><sup>$</sup><strong>18</strong>.<sup>99</sup> <small>/month</small></h2>
						</div>
						<div class="plan-features">
							<ul class="features-list">
								<li>bandwidth <i class="ion-ios-infinite alt-color" data-toggle="tooltip" title="There is no restriction on bandwidth usage"></i></li>
								<li>disk storage <strong class="alt-color" data-toggle="tooltip" title="Scalable upto 50TB">20GB</strong></li>
								<li>websites <strong>5</strong></li>
								<li>domain name <strong class="alt-color" data-toggle="tooltip" title="You will get one domain free of charge for lifetime">free</strong></li>
								<li><i class="fa fa-close text-danger"></i></li>
								<li>24/7 phone support</li>
							</ul>
						</div>
						<div class="plan-footer">
							<a href="javascript:void(0);" class="btn btn-warning" title="Start your regular plan">Start Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="plan style2">
						<div class="plan-header bg-success">
							<i class="livicon" data-name="barchart" data-color="#fff" data-hovercolor="#fff" data-size="48"></i>
							<h4 class="title">Most Popular</h4>
							<h2 class="price"><sup>$</sup><strong>24</strong>.<sup>99</sup> <small>/month</small></h2>
						</div>
						<div class="plan-features">
							<ul class="features-list">
								<li>bandwidth <i class="ion-ios-infinite alt-color" data-toggle="tooltip" title="There is no restriction on bandwidth usage"></i></li>
								<li>disk storage <strong class="alt-color" data-toggle="tooltip" title="Scalable upto 50TB">50GB</strong></li>
								<li>websites <strong>10</strong></li>
								<li>domain name <strong class="alt-color" data-toggle="tooltip" title="You will get one domain free of charge for lifetime">free</strong></li>
								<li>free SSL</li>
								<li>24/7 phone support</li>
							</ul>
						</div>
						<div class="plan-footer">
							<a href="javascript:void(0);" class="btn btn-success" title="Start your popular plan">Start Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="plan style2">
						<div class="plan-header bg-danger">
							<i class="livicon" data-name="dashboard" data-color="#fff" data-hovercolor="#fff" data-size="48"></i>
							<h4 class="title">Speed Booster</h4>
							<h2 class="price"><sup>$</sup><strong>49</strong>.<sup>99</sup> <small>/month</small></h2>
						</div>
						<div class="plan-features">
							<ul class="features-list">
								<li>bandwidth <i class="ion-ios-infinite alt-color" data-toggle="tooltip" title="There is no restriction on bandwidth usage"></i></li>
								<li>disk storage  <i class="ion-ios-infinite alt-color" data-toggle="tooltip" title="There is no restriction on disk usage"></i></li>
								<li>websites  <i class="ion-ios-infinite alt-color" data-toggle="tooltip" title="Host as many webistes as you want"></i></li>
								<li>domain name <strong class="alt-color" data-toggle="tooltip" title="You will get one domain free of charge for lifetime">free</strong></li>
								<li>free SSL</li>
								<li>24/7 phone support</li>
							</ul>
						</div>
						<div class="plan-footer">
							<a href="javascript:void(0);" class="btn btn-danger" title="Start your speed booster plan">Start Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- section END -->
	
	<!-- section START -->
	<!--<section class="section img-bg-color-overlay" data-path="img/bg/bg12.jpg" id="clients">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
					<div class="section-header alt-style">
						<h1 class="strong">Our Happy Clients</h1>
						<small class="text-uppercase strong base-color">Fusce vulputate enim vitae dolor <br>consectetur rutrum viverra commodo. </small>
					</div>
					
					<hr class="spacer-10">
					
					<div class="featured-clients">
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="0.5s" src="img/clients/1.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="0.7s" src="img/clients/2.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="0.9s" src="img/clients/3.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="1.1s" src="img/clients/4.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="1.3s" src="img/clients/5.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="1.5s" src="img/clients/6.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="1.7s" src="img/clients/7.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="1.9s" src="img/clients/8.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="2.1s" src="img/clients/9.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="2.3s" src="img/clients/10.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="2.5s" src="img/clients/11.png" width="280" height="260" alt="Client Name"></a>
						<a href="javascript:void(0);" title="Client Name"><img class="wow flipInX" data-wow-delay="2.7s" src="img/clients/12.png" width="280" height="260" alt="Client Name"></a>
					</div>
					
				</div>
			</div>
		</div>
	</section>-->
	<!-- section END -->
	
						
	<!-- section START -->
	<!--<section class="section" id="news">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="section-header">
						<small class="text-uppercase strong base-color">Lorem ipsum dolor sit amet</small>
						<h1>Featured News Updates</h1>
					</div>-->
					
					<!-- optional spacer classes "spacer-10" "spacer-20" "spacer-30" upto "spacer-80" -->
					<!--<hr class="spacer-30">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
				
					<div class="thumbnail style1">
						<div class="thumb-wrapper">
							<img src="img/thumbnails/thumb1.jpg" alt="Thumbnail">
							<a href="javascript:void(0);" class="post-author" data-toggle="tooltip" title="Author Name"><img src="img/authors/author1.jpg" alt="Post Author"></a>
						</div>
						<div class="caption">
							<h3><a href="javascript:void(0);" class="post-title" title="post title">Post title one</a></h3>
							<div class="post-meta">
								<span class="post-category">Creative</span>
								<span class="post-date">08 June, 2015</span>
								<span class="post-comments"><a href="javascript:void(0);" title="Comments on this post">6</a> <i class="fa fa-comments"></i></span>
							</div>
							<p>Suspendisse potenti fusce rutrum none fringilla dictum. Praesent nant tincidunt polars feugiat non rutrum eget libero.</p>
							<a href="javascript:void(0);" class="btn btn-primary btn-sm" title="Thumbnail link">Read More</a>
						</div>
					</div>
					
				</div>
				<div class="col-sm-4">
				
					<div class="thumbnail style1">
						<div class="thumb-wrapper">
							<div class="thumbs-carousel">
								<div class="item">
									<img src="img/thumbnails/thumb3.jpg" class="img-responsive" alt="Thumbnail">
								</div>
								<div class="item">
									<img src="img/thumbnails/thumb4.jpg" class="img-responsive" alt="Thumbnail">
								</div>
								<div class="item">
									<img src="img/thumbnails/thumb5.jpg" class="img-responsive" alt="Thumbnail">
								</div>
							</div>								
							<a href="javascript:void(0);" class="post-author" data-toggle="tooltip" title="Author Name"><img src="img/authors/author2.jpg" alt="Post Author"></a>
						</div>
						<div class="caption">
							<h3><a href="javascript:void(0);" class="post-title" title="post title">Post title two</a></h3>
							<div class="post-meta">
								<span class="post-category">Programming</span>
								<span class="post-date">09 June, 2015</span>
								<span class="post-comments"><a href="javascript:void(0);" title="Comments on this post">34</a> <i class="fa fa-comments"></i></span>
							</div>
							<p>Suspendisse potenti fusce rutrum none fringilla dictum. Praesent nant tincidunt polars feugiat non rutrum eget libero.</p>
							<a href="javascript:void(0);" class="btn btn-primary btn-sm" title="Thumbnail link">Read More</a>
						</div>
					</div>
					
				</div>
				<div class="col-sm-4">
				
					<div class="thumbnail style1">
						<div class="thumb-wrapper">
							<img src="img/thumbnails/thumb2.jpg" alt="Thumbnail">
							<a title="Video title here" class="nivo-lightbox play-btn cbutton cbutton--effect-ivana wow fadeIn" data-wow-delay="0.5s" href="http://vimeo.com/70301553"><i class="fa fa-play"></i></a>
							<a href="javascript:void(0);" class="post-author" data-toggle="tooltip" title="Author Name"><img src="img/authors/author3.jpg" alt="Post Author"></a>
						</div>
						<div class="caption">
							<h3><a href="javascript:void(0);" class="post-title" title="post title">Post title three</a></h3>
							<div class="post-meta">
								<span class="post-category">Laptops</span>
								<span class="post-date">13 June, 2015</span>
								<span class="post-comments"><a href="javascript:void(0);" title="Comments on this post">3</a> <i class="fa fa-comments"></i></span>
							</div>
							<p>Suspendisse potenti fusce rutrum none fringilla dictum. Praesent nant tincidunt polars feugiat non rutrum eget libero.</p>
							<a href="javascript:void(0);" class="btn btn-primary btn-sm" title="Thumbnail link">Read More</a>
						</div>
					</div>
					
				</div>		
			</div>
		</div>
	</section>-->
	<!-- section END -->
	
	<!-- section START -->
	<section>
		<a class="info-box bg-success text-center no-margin wow flipInX" data-wow-delay="0.5s" href="javascript:void(0);">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<i class="livicon pull-right visible-lg" data-name="angle-double-right" data-color="#fff" data-hovercolor="false" data-size="36" data-onparent="true"></i>
						<p class="h2">Take your business to the ultimate level with tempo</p>
					</div>
				</div>
			</div>
		</a>
	</section>
	<!-- section END -->

@endsection