<?php include 'components/header2.php' ; ?>
<!-- main body - start
		================================================== -->
		<main>


			<!-- sidebar mobile menu - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				<div class="sidebar_mobile_menu">

					<span class="close_btn"><i class="fal fa-times"></i></span>

					<div class="mobile_menu_list clearfix">
						<ul class="ul_li_block clearfix">
							<li class="active dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
								<ul class="dropdown-menu">
									<li><a href="index_1.html">Home Page V.1</a></li>
									<li><a href="index_2.html">Home Page V.2</a></li>
									<li><a href="index_3.html">Home Page V.3</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
								<ul class="dropdown-menu">
									<li><a href="service_1.html">Service V.1</a></li>
									<li><a href="service_2.html">Service V.2</a></li>
									<li><a href="service_details.html">Service Details</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="pricing.html">Pricing Plans</a></li>
									<li><a href="team.html">Creative Team</a></li>
									<li class="dropdown">
										<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Portfolio</a>
										<ul class="dropdown-menu">
											<li><a href="portfolio_metro.html">Portfolio Metro</a></li>
											<li><a href="portfolio_masonry.html">Portfolio Masonry</a></li>
											<li><a href="portfolio_details.html">Portfolio Details</a></li>
										</ul>
									</li>
									<li><a href="faq.html">F.A.Q.</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li><a href="shop.html">Our Shop</a></li>
									<li><a href="shop_details.html">Shop Details</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
								<ul class="dropdown-menu">
									<li><a href="blog_grid.html">Blog Grid</a></li>
									<li><a href="blog_standard.html">Blog Standard</a></li>
									<li><a href="blog_details.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Conatct</a></li>    
						</ul>
					</div>

				</div>
				<div class="overlay"></div>
			</div>
			<!-- sidebar mobile menu - end
			================================================== -->


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="assets/images/breadcrumb/bg_01.jpg">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">Contact Us</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="index.html">Home</a></li>
								<li>Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- contact_section - start
			================================================== -->
			<section class="contact_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_content">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">Contact Us</h4>
									<h2 class="big_title mb-0">
										Every Single Update To Contact Us
									</h2>
									<span class="biggest_title">Contact</span>
								</div>
								<p class="mb_30 wow fadeInUp2" data-wow-delay=".2s">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan
									tium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dict
								</p>
								<ul class="contact_information_list ul_li_block clearfix">
									<li class="wow fadeInUp2" data-wow-delay=".3s">
										<div class="item_icon bg_default_orange"><i class="fal fa-map-marker-alt"></i></div>
										<div class="item_content">
											<h4>Locations</h4>
											<p>9 Puran Paltan Line , Dhaka-1000 , Bangladesh.</p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".4s">
										<div class="item_icon bg_default_yellow"><i class="fal fa-envelope"></i></div>
										<div class="item_content">
											<h4>Email Us</h4>
											<p>info@centerprintingbd.com</p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".5s">
										<div class="item_icon bg_default_lightblue"><i class="fal fa-phone"></i></div>
										<div class="item_content">
											<h4>Phone Us</h4>
											<p>+880 (02) 8391 904</p>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_form">
								<form id="contact-form" action="assets/mail.php" method="POST">
									<div class="form_item wow fadeInUp2" data-wow-delay=".1s">
										<span class="input_title">Full Name</span>
										<div class="position-relative">
											<input id="input_user" type="text" name="name" placeholder="Write Your Name">
											<label class="input_icon" for="input_user"><i class="fal fa-user"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".2s">
										<span class="input_title">Email Address</span>
										<div class="position-relative">
											<input id="input_email" type="email" name="email" placeholder="Write Your Email">
											<label class="input_icon" for="input_email"><i class="fal fa-envelope"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".3s">
										<span class="input_title">Phone Number</span>
										<div class="position-relative">
											<input id="input_phone" type="tel" name="phone" placeholder="Write Your Phone Number">
											<label class="input_icon" for="input_phone"><i class="fal fa-phone"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".4s">
										<span class="input_title">Leave A Message</span>
										<textarea name="message" placeholder="Write Your Message"></textarea>
									</div>

									<button type="submit" class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".5s">
										send message 
										<span><i class="fal fa-arrow-right"></i></span>
									</button>
									<p class="ajax-response"></p>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- contact_section - end
			================================================== -->


			<!-- google map - start
			================================================== -->
			<div class="map_section wow fadeIn clearfix" data-wow-delay=".1s">
				<div id="mapBox" 
                data-lat="23.7333567" 
                data-lon="90.4116416" 
                data-zoom="12" 
                data-info="7th floor , Paltan Tower , Dhaka , BD." 
                 data-mlat="23.7333567"
                  data-mlon="90.4116416">
				</div>
			</div>
			<!-- google map - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->
<?php include 'components/footer2.php' ; ?>