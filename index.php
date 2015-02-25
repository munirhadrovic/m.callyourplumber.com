<!DOCTYPE html>
<html>
	<head>
	
	
	<!-- Test from Eclipse -->
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-home').slicknav({
					prependTo:'#navigation-menu-home'
				});
			});
			$(function(){
				$('#menu-ourteam').slicknav({
					prependTo:'#navigation-menu-ourteam'
				});
			});
			$(function(){
				$('#menu-patientinfo').slicknav({
					prependTo:'#navigation-menu-patientinfo'
				});
			});
			$(function(){
				$('#menu-services').slicknav({
					prependTo:'#navigation-menu-services'
				});
			});
			$(function(){
				$('#menu-patientform').slicknav({
					prependTo:'#navigation-menu-patientform'
				});
			});
			$(function(){
				$('#menu-newbuffalo').slicknav({
					prependTo:'#navigation-menu-newbuffalo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });		
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>">
		    <h1>Powered By <a href="http://mobilegrows.com">MobileGrows</a> | <a href="http://callyourplumber.com/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/01.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/02.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
				        <img src="img/slider-images/03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
				        <img src="img/slider-images/10.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone velikodugme ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">About</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#ourteam" data-transition="<?php echo $transitionefect ?>">Residental</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Commercial</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></div>
				</div>
		  </div>
		  

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page home about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="home" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-home">
						<ul id="menu-home">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">About</a></li>
							<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Residental</a></li>
							<li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
							<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
							<li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
						</ul>
					</section>
                    <img src="img/slider-images/05.jpg" alt="">
						<h2>Welcome to our website!</h2>

                        <p>A-Z Plumbing & Drain Service offers full residential and commercial plumbing and drain cleaning services. Our plumbers are available 24-hours a day and are among the most highly trained in the industry.</p>

                        <p>We continually exceed our customers’ expectations by arriving to the job site when we say we will, always offering free estimates and up-front pricing and never charging extra fees for after hours or Sunday calls.
                            We stand behind our work and are fully licensed, bonded and insured.</p>

                        <p>Fully Licensed, Bonded & Insured</p>
                        <p>OH License #37981</p>

					

				</div>

			</div>	
				
				
		</div>
		
	<!-- page home about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		

		<!--contact form/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
								<li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
								<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
								<li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Patient Forms</a></li>
								<li><a href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">NEW Buffalo Grove Office</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>	
					<div>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/>
							Message:
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea>
							<input type="submit" value="Send" name="submit" class="btn">
						</form>
					</div>
				</div>
			</div>
		
		</div>

		<!--page contact ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!--Our team residental///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="ourteam" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-ourteam">
							<ul id="menu-ourteam">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About</a></li>
                                <li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Residental</a></li>
                                <li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
                                <li><a href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
							</ul>
					</section>
                    <img src="img/slider-images/06.jpg" alt="">
                    <h2>Residential Services</h2>


                    <p>We Specialize in Sewer and Drain Cleaning Services, Including:</p>

                    <p>Cleaning Your Sewer & Drain Lines with the most up-to-date, high quality, snaking and root removal equipment. We’ll even flush out the toughest blockages with our high-velocity water pressure jetting system</p>

                    <p>Inspecting Your Sewer & Drain Lines, septic tanks, and downspouts with video inspection cameras. These specialty cameras allow us to check for leaks, breaks or even accidentally lost or flushed items.</p>

                    <p>Replacing Sewer & Drain Lines that are broken, damaged or extensively corroded. Our professional excavation team will work quickly to bring your project to completion.</p>

                    <p>We Will Solve Your Plumbing & Drain Problems</p>
				</div>
			</div>
		
		</div>
		<!--Our teams ends residental///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<!--Patient Info commercial///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="patientinfo" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-patientinfo">
							<ul id="menu-patientinfo">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About</a></li>
                                <li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Residental</a></li>
                                <li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
                                <li><a href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
							</ul>
					</section>
                    <img src="img/slider-images/07.jpg" alt="">
					<h2>Commercial Services</h2>
                    <h4>A-Z Plumbing Provides Complete Commercial Plumbing</h4>
                    <p>installations, repairs, and sewer and drain cleaning services across Cuyahoga, Geagua and Lake Counties. We can clean drains,
                        jet lines, pump grease traps and liquid waste and fulfill all the plumbing needs of your company, restaurant, retail outlet, or commercial property.</p>
				</div>
			</div>
		
		</div>
		<!--patient info ends commercial///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<!--Services testimonials///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="services" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-services">
							<ul id="menu-services">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About</a></li>
                                <li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Residental</a></li>
                                <li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
                                <li><a href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
							</ul>
					</section>
                    <img src="img/slider-images/08.jpg" alt="">
					<h2>Testimonials</h2>
                    <p>"It was excellent. Eitan was very courteous and professional. He put booties on his shoes so he didn't track in our house. He really talks with you
                        about what he thinks needs done. He gave different options of the way things could be done along
                        with the advantages and disadvantages. He was half the price of other quotes that we got. He cleaned up everything when he was done and did the job
                        for exactly what he said he would. He is just a very good plumber."</p>
                    <p><strong>David & Shelley F., Aurora</strong></p>

                    <p>" Very friendly professional and pleasant to work with."</p>
                    <p><strong>LOLA H., Cleveland Heights</strong></p>

                    <p>" They came out immediately on a Thursday and gave me a quote but unfortunately could not do the work until Monday morning.
                        They agreed not to mark up cost of the parts and provide me with proof of such if necessary. It was an excellent experience."</p>
                    <p><strong>ANGELA B., Cleveland</strong></p>

                    <p>" Eitan does business "the old-fashioned way". He came to our house twice without charge and spoke to our city sewer service person for me to arrange their snaking the
                        flood drain for us without charge. Once the city had re-established drainage and the 8 inches of water in our basement was gone, he came out to try to get pilot light on
                        our existing one- year-old water heater to stay on. He spent about an hour trying to dry out water damage and suggested I run a fan on the area for a few hours to see if
                        I could get it to work. Again, no charge. After repeated attempts to maintain pilot light and restore heat, I called him back and arranged for replacement. He had to order
                        the heater and offered me three levels of quality product. He got the heater for me, returned to install it on a Sunday,
                        all without charging premium rates for Sunday service or any of the prior visits. The old water heater was drained and removed and they even cleaned the floor."</p>
                    <p><strong>CHARLES B., Willoughby Hills</strong></p>

                    <p>" Replaced a shower valve that was improperly installed by a previous contractor. The situation was grim!
                        Previous contractor installed tile and put in a new shower and tub spout. However, the job was done so badly that the shower handle would not connect and we had to use a wrench to turn on the water.
                        Initially, we believed the only solution was to tear out the tile and start over. Eitan researched every possibility, trying to save us the cost of redoing the job completely. After much work, he found a
                        company that made an extender to fit the valve and saved us thousands of dollars in fixing the mess. Eitan is one of the most trustworthy contractors we have ever worked with. He is prompt, professional and
                        provides a wealth of knowledge about plumbing. His estimates are more than fair, exactly as he quotes and he goes way above the call of duty to get the job done.
                        I highly recommend A-Z plumbing to any homeowner looking for an excellent plumbing company!"</p>
                    <p><strong>STEPHEN S., Cleveland Heights</strong></p>

                    <p>" I was told someone would come out and give me an estimate. They arrived, the same day, almost exactly when they said they would. We discussed the problem. After a few checks, I was told that the only access was through
                        the floor drain. I was pleased with the work. It was done quickly and resulted in no mess, in spite of difficult access to the drain (behind the washer and laundry tubs). "</p>
                    <p><strong>ROBERT E., Shaker Heights</strong></p>

                    <p>" We called A-Z plumbing in the morning, and they were willing to accommodate my schedule and met me after work to fix our kitchen sink drain. Mr. Ben-Avi and his partner were extremely polite and friendly. They explained what
                        they were going to be doing and why it needed to be done. They also explained what previous work had been done on the drain and in a larger pipe in the basement. They worked very diligently to clear the drain and used two different sizes of snakes as
                        the first size didn't do the trick. The price was very reasonable, especially considering the amount of time they spent clearing the drain. I would not hesitate to use this company again or recommend them to a friend."</p>
                    <p><strong>MICHAEL C., Lyndhurst</strong></p>

                    <p>" IT WAS A PLEASURE TO WORK WITH EITAN! HE CAME THE DAY AFTER CALLING. HE INITIALLY ATTEMPTED TO SNAKE THE DRAIN BUT FOUND BLOCKAGE. HE RECOMMENDED RUNNING A CAMERA AND GAVE US THE EXACT COST PRIOR TO DOING SO. AS A MASTER PLUMBER, EITAN'S KNOWLEDGE AND
                        WORK ETHIC ARE RARE.
                        HE DID NOT CHARGE US FOR VALUABLE INFO! HE IS A GOOD MAN WHO TRULY DESIRES TO HELP PEOPLE NOT RIP THEM OFF. I WILL USE A-Z FOR ALL OUR PLUMBING NEEDS. RECOMMEND HIGHLY!"</p>
                    <p><strong>LISA S., Cleveland Heights</strong></p>
				</div>
			</div>
		
		</div>
		<!--services ends testimonials///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<!--patientform coupon///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="patientform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-patientform">
							<ul id="menu-patientform">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About</a></li>
                                <li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Residental</a></li>
                                <li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
                                <li><a href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
							</ul>
					</section>
                    <img src="img/slider-images/09.jpg" alt="">
                    <h2>Money Saving Coupons</h2>

                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">$55 Off</p
                            <p>Any  Plumbing Service
                            Not valid with any other offer.</p>

                        </div>
                        <div class="ui-block-b">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">$35 Off</p
                            <p>Any Drain Cleaning Service
                                Not valid with any other offer.</p>

                        </div>
                        <div class="ui-block-a">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">FREE!</p
                            <p>Video Camera Inspection -
                                with main sewerline cleaning
                                Not valid with any other offer.</p>

                        </div>
                        <div class="ui-block-b">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">$75 Off</p
                            <p>Hot Water Heater, Installed
                                Not valid with any other offer.</p>

                        </div>
                    </div>


				</div>
			</div>
		
		</div>
		<!--patientform ends coupon///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" >		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
		</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" >
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		
	</body>
</html>
