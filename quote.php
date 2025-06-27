<?php include 'components/header2.php' ; ?>
<main>
            <section class="breadcrumb_section d-flex align-items-center clearfix" data-background="assets/images/breadcrumb/bg_01.jpg" style="background-image: url(&quot;assets/images/breadcrumb/bg_01.jpg&quot;);">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
							<h1 class="page_title mb-0">GET A QUOTATION</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="index.html">Home</a></li>
								<li>Price Calculator</li>
							</ul>
						</div>
					</div>
				</div>
			</section>



			<!-- faqcontact_section - start
			================================================== -->
			<section class="faqcontact_section bg_gray clearfix">
				<div class="container-fluid p-0">
					<div class="row no-gutters align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
							<div class="faq_image wow fadeIn" data-wow-delay=".1s">

                            <?php if(isset($_GET['quantity'])){
                                       echo $quantity = $_GET['quantity'] ;

                                } else{ ?>
								<img src="assets/images/contact/img_01.jpg" alt="image_not_found">
                                    <?php } ?>

							</div>
						</div>

						<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
							<div class="faq_contact_form">
								<div class="section_title mb_50 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">Try to estimate price</h4>
									<h2 class="big_title mb-0">
									Price Estimation Calculator 
									</h2>
									<span class="biggest_title">Know</span>
								</div>


                                <!-- Form Start here -->
								<form method="GET" action="http://localhost/centerprinting/quote-result.php">

									<div class="form_item wow fadeInUp2" data-wow-delay=".2s">
										<input  type="text" name="quantity" id="quantity" placeholder="Total Quantity">
										<label class="input_icon" for="quantity"><i class="fas fa-tally"></i>
                                      
									</div>


                                    <div class="form_item wow fadeInUp2" data-wow-delay=".3s">

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" name="sizeX" id="sizeX" class="form-control" placeholder="Size X" aria-label="Size X">
                                                <label class="input_icon" for="email_address"><i class="fas fa-ruler-vertical"></i>
                                            </div>
                                            <div class="col">
                                                <input type="text" name="sizeY" id="sizeY" class="form-control" placeholder="Size Y" aria-label="Size Y">
                                                <label class="input_icon" for="email_address"><i class="fas fa-ruler-horizontal"></i>
                                            </div>
                                        </div>
									</div>


									<div class="select_option wow fadeInUp2" data-wow-delay=".4s">
										<select name="paper" id="paper">
											<option data-display="Paper">Paper Type</option>
                                            <!--option value="x,y,Cost,Sheet,Name">300 GSM Art Card 22,28</option-->
											

											<!--Art Card --> <!--Swedish Board -->

                                            <option value="22,28,1600,100,300 GSM Art Card DC">300 GSM Art Card DC</option>
                                            <option value="28,44,3100,100,300 gsm Swedish 28 x 44">300 gsm Swedish 28 x 44</option> 
                                            <option value="23,36,1700,500,61 Bashundara DD">61 Bashundara DD</option>
											<!--Art Paper-->
											<option value="23,36,2800,500,80 gsm art paper DD">80 gsm Art Paper DD</option>

											<option value="23,36,3250,500,100 gsm art paper DD">100 gsm Art Paper DD</option>
											<option value="20,30,2450,500,100 gsm art paper DC">100 gsm Art Paper DC</option>

											<option value="23,36,3950,500,120 gsm art paper DD">120 gsm Art Paper DD</option>
											<option value="20,30,2950,500,120 gsm art paper DC">120 gsm Art Paper DC</option>

											<option value="20,30,3700,500,150 gsm art paper DC">150 gsm Art Paper DC</option>
											<option value="23,36,4900,500,150 gsm art paper DD">150 gsm Art Paper DD</option>

											<!--Offset Paper-->
											<option value="23,36,1650,500,61 gsm offset paper DD">61 gsm Offset Paper DD</option>
											<option value="23,36,1750,500,65 gsm offset paper DD">65 gsm Offset Paper DD</option>

											<option value="23,36,2150,500,80 gsm offset paper DD">80 gsm Offset Paper DD</option>
											<option value="20,30,1600,500,80 gsm offset paper DD">80 gsm Offset Paper DC</option>

											<option value="23,36,2650,500,100 gsm offset paper DD">100 gsm Offset Paper DD</option>
											<option value="20,30,1900,500,100 gsm offset paper DD">100 gsm Offset Paper DC</option>

											
											<!--Sticker -->
											<option value="20,30,2000,500,100 gsm offset paper DD">Sticker</option>

										</select>
									</div>


									<div class="select_option wow fadeInUp2" data-wow-delay=".5s">
										<select name="color" id="color">
											<option data-display="Color">Color Type</option>
                                                <option value="4,1,280">4 Color Single Side</option>
                                                <option value="4,2,280">4 Color Double Side</option>
                                                <option value="2,1,280">2 Color Single Side</option>
                                                <option value="2,2,280">2 Color Double Side</option>
                                                <option value="1,1,280">1 Color Single Side</option>
                                                <option value="1,2,280">1 Color Double Side</option>
                                                
										</select>
									</div>


									<div class="form-check wow fadeInUp2" data-wow-delay=".6s">
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="plateSize" value="8" checked>
                                        <label class="form-check-label" for="inlineRadio1">Half Plate</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="plateSize" value="16">
                                        <label class="form-check-label" for="inlineRadio2">Full Plate</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="plateSize"  value="4">
                                        <label class="form-check-label" for="inlineRadio3">Quarter Plate</label>
                                        </div>
									</div>


                                    <div class="row">
                                            <div class="col">
                                            <div class="select_option wow fadeInUp2" data-wow-delay=".7s">
                                                <select name="lamination" id="lamination">
                                                    <option data-display="Lamination">Lamination  Type</option>
                                                        <option value="0" selected>No Lamination</option>
                                                        <option value="0.0035">Gloss Finished Laminates</option>
                                                        <option value="0.0035">Matt Finished Laminates</option>
                                                        <option value="0">Textured Laminates</option>
                                                        <option value="0.0025">UV Laminates</option>
                                                        <option value="0">Anti-Bacterial Laminate</option>
                                                        
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col">
                                                <div class="select_option wow fadeInUp2" data-wow-delay=".8s">
                                                    <select name="cutting" id="cutting">
                                                        <option data-display="Cutting">Cutting  Type</option>
                                                            <option value="0.0005" selected>Normal Cutting</option>
                                                            <option value="0.0035">Die Cutting </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


									




									<button type="submit" class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".9s">
										Calculate!
										<span><i class="fal fa-arrow-right"></i></span>
									</button>
								</form>



							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- faqcontact_section - end
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