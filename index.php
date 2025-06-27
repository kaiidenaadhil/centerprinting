<?php include 'components/header2.php' ; ?>
		<!-- main body - start
		================================================== -->
		<main class="mt-0">

		<!-- main body - end
		================================================== -->

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

			<!-- banner_section - start
			================================================== -->
			<section class="banner_section home_two_banner clearfix">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-last">
							<div class="banner_image scene">
								<div class="image_1 wow fadeInUp2" data-wow-delay=".1s">
									<img class="layer" data-depth="0.2" src="assets/images/banner/home_02/img_01.jpg" alt="image_not_found">
								</div>
								<div class="image_2 wow fadeInUp2" data-wow-delay=".2s">
									<img class="layer" data-depth="0.3" src="assets/images/banner/home_02/img_02.jpg" alt="image_not_found">
								</div>
								<div class="image_3 wow fadeInUp2" data-wow-delay=".3s">
									<img class="layer" data-depth="0.4" src="assets/images/banner/home_02/img_03.jpg" alt="image_not_found">
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="banner_contant">
								<h4 class="sub_title wow fadeInUp2" data-wow-delay=".2s">Welcome to CenterPrinting</h4>
								<h3 class="item_title text-white wow fadeInUp2" data-wow-delay=".3s">
									Leading Commercial Printing & Packaging
								</h3>
								<a class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".4s"  href="about.php">
									discover more 
									<span><i class="fal fa-arrow-right"></i></span>
								</a>
								<span class="decoration_text wow fadeIn" data-wow-delay=".1s">Printing</span>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- banner_section - end
			================================================== -->




        			<!-- blog_section - start
			================================================== -->
			<section class="blog_section sec_ptb_130 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
							<div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
							
							


<?php

if(isset($_SERVER['HTTP_CLIENT_IP'])){
	$ip = $_SERVER['HTTP_CLIENT_IP'] ;
}
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo 'Hello visitor from '.strtolower($query['countryCode']).', '.$query['city'].'!';
} else {
  echo 'Unable to get location';
}
?>
								<h4 class="small_title">Latest News & Blog</h4>
								<h2 class="big_title mb-0">
									Get More Update For News & Articles
								</h2>
								<span class="biggest_title">Blogs</span>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
							<div class="blog_fullimage_2 text-white">
								<img src="assets/images/blog/fullimage/img_02.jpg" alt="image_not_found">
								<div class="item_content">
									<ul class="post_meta ul_li clearfix">
										<li><a href="#!"><i class="fal fa-user-circle"></i> David Warner</a></li>
										<li><a href="#!"><i class="far fa-comments"></i> Comments (05)</a></li>
									</ul>
									<h3 class="item_title">
										<a target="_blank" href="blog_details.html">
											Solving Common Cross Plat Form Issues When Working With Flutter Ways
										</a>
									</h3>
								</div>
								<a class="text_btn absolute_btn" target="_blank" href="blog_details.html"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
							<div class="blog_fullimage_2 text-white">
								<img src="assets/images/blog/fullimage/img_03.jpg" alt="image_not_found">
								<div class="item_content">
									<ul class="post_meta ul_li clearfix">
										<li><a href="#!"><i class="fal fa-user-circle"></i> David Warner</a></li>
										<li><a href="#!"><i class="far fa-comments"></i> Comments (05)</a></li>
									</ul>
									<h3 class="item_title">
										<a target="_blank" href="blog_details.html">
											A Practical Guide To Testing React Applications With Jest Web Designers Can Help
										</a>
									</h3>
								</div>
								<a class="text_btn absolute_btn" target="_blank" href="blog_details.html"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
							<div class="blog_fullimage_2 text-white">
								<img src="assets/images/blog/fullimage/img_04.jpg" alt="image_not_found">
								<div class="item_content">
									<ul class="post_meta ul_li clearfix">
										<li><a href="#!"><i class="fal fa-user-circle"></i> David Warner</a></li>
										<li><a href="#!"><i class="far fa-comments"></i> Comments (05)</a></li>
									</ul>
									<h3 class="item_title">
										<a target="_blank" href="blog_details.html">
											Smashing Podcast Episode 18 With Mina Markham Hows Can  Learn React
										</a>
									</h3>
								</div>
								<a class="text_btn absolute_btn" target="_blank" href="blog_details.html"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- blog_section - end
			================================================== -->

			<!-- brand_section - start
			================================================== -->
			<div class="brand_section primary_brand_section bg_gray d-flex align-items-center clearfix">
				<div class="container text-center">
					<div class="row align-items-center justify-content-lg-between">

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="brand_logo bg_default_yellow">
								<a href="index.html">
									<img src="assets/images/logo/LogoCenterPrinting.png" srcset="assets/images/logo/LogoCenterPrinting.png 2x" alt="logo_not_found">
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
							<div class="logo_image">
								<a href="#!">
									<img src="assets/images/brands/img_01.png" alt="logo_not_found">
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
							<div class="logo_image">
								<a href="#!">
									<img src="assets/images/brands/img_02.png" alt="logo_not_found">
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
							<div class="logo_image">
								<a href="#!">
									<img src="assets/images/brands/img_03.png" alt="logo_not_found">
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
							<div class="logo_image">
								<a href="#!">
									<img src="assets/images/brands/img_04.png" alt="logo_not_found">
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- brand_section - end
			================================================== -->
            </main>
<?php include 'components/footer2.php' ; ?>