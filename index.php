<!DOCTYPE html>
<html>
	<head>
	
	
	<!-- Test from Eclipse -->
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
		<title>Cleveland plumbers and plumbing. Drain clearing, drain cleaning, sewer and plumbing experts of Cleveland</title>
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
		    <h1><a href="#page1"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
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
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone velikodugme ui-btn-icon-top buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-top buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-top buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-top buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-top buttons-radius");
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
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Residental</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Commercial</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Coupons</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></div>
				</div>
				<!--<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">Shedule An Appointment</a></div>
				</div>-->
				<img src="img/BBB_New_Logo.jpg" alt="">
				<img src="img/ss.jpg" alt="">
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
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Residental</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<a name="myAnchor" id="myAnchor"></a>
					
					<p>This is only a <b>PREVIEW</b> version of your Mobile Website.</p>
                    <p>Please contatact our official Sales Representative for <b>Full Functional Version.</b></p>

                    <!--<img src="img/slider-images/05.jpg" alt="">
						<h2>Welcome to our website!</h2>

                       	 <p><b>A-Z Plumbing & Drain Service offers</b> full residential and commercial plumbing and drain cleaning services. Our plumbers are available 24-hours a day and are among the most highly trained in the industry.</p>

                        <p>We continually exceed our customers’ expectations by arriving to the job site when we say we will, always offering free estimates and up-front pricing and never charging extra fees for after hours or Sunday calls.
                            We stand behind our work and are fully licensed, bonded and insured.</p>

                        <p><b>Fully Licensed, Bonded & Insured</b></p>
                        <p>OH License #37981</p>
					<hr>
                        <ul><i>
                            <li>Sewer and Drain Cleaning</li>
                            <li>Faucets & Sinks</li>
                            <li>Diposers</li>
                            <li>Toilets</li>
                            <li>Gas Lines (OQ/D.O.T. Certified)</li>
                            <li>Showers & Bathtubs</li>
                            <li>Water Heaters</li>
                            <li>Dishwashers</li>
                            <li>Video Camera Inspection Services</li>
                            <li>Kitchen & Bath Remodels</li></i>
                        </ul>
					<hr>
					<p>A-Z Plumbing & Drain Service, Inc.</p>
					<p>Copyright © 2010 - 2014.</p>
					

					<img src="img/creditcards-accepted.gif" alt="">

					<a href="#myAnchor" class="dmBackToTop ui-corner-all" id="dmBackToTop" style="opacity: 1; visibility: visible;" onclick="$.mobile.silentScroll(0)"></a> -->


					<!--<a href="#" onclick="$.mobile.silentScroll(0)" data-role="button">Back to Top</a>-->
				</div>

			</div>	
			
		</div>
		
		<!-- page home about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		

		<!--contact form/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Residental</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
							</ul>
					</section>	
					<div>
					<img src="img/slider-images/1slide.gif" alt="" class="gif">
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/>
							Message:
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea>
							<input type="submit" value="Send" name="submit" class="btn">
						</form>
						<a class="dmBackToTop" id="dmBackToTop" style="opacity: 1; visibility: visible;" onclick="$.mobile.silentScroll(0)"></a>
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
                                <li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Commercial</a></li>
                                <li><a href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>
                    <img src="img/slider-images/06.jpg" alt="">
                    <h2>Residential Services</h2>


                    <p><b>We Specialize in Sewer and Drain Cleaning Services, Including:</b></p>

                    <p><b>Cleaning Your Sewer & Drain Lines</b> with the most up-to-date, high quality, snaking and root removal equipment. We’ll even flush out the toughest blockages with our high-velocity water pressure jetting system</p>

                    <p><b>Inspecting Your Sewer & Drain Lines</b>, septic tanks, and downspouts with video inspection cameras. These specialty cameras allow us to check for leaks, breaks or even accidentally lost or flushed items.</p>

                    <p><b>Replacing Sewer & Drain Lines that are broken</b>, damaged or extensively corroded. Our professional excavation team will work quickly to bring your project to completion.</p>

                    <p><b>We Will Solve Your Plumbing & Drain Problems</b></p>

                    <ul><i>
                        <li>Sewer and Drain Cleaning</li>
                        <li>Video Camera Inspection Services</li>
                        <li>Leak Detection & Repairs</li>
						<li>Water & Gas Re-pipes</li>
						<li>Septic Repair & Maintenance</li>
						<li>High Velocity Jetting Services</li>
						<li>Waterproofing</li>
						<li>Kitchen & Bath Remodeling</li>
						<li>Water Filtration Systems</li>
						<li>Preventive Maintenance</li>
                    </i></ul>
					<hr>
					<p><b>We Install, Repair And Replace the Following:</b></p>
					<ul><i>
                        <li>Faucets</li>
                        <li>Sinks</li>
                        <li>Diposers</li>
                        <li>Toilets</li>
                        <li>Showers & Bathrooms</li>
                        <li>Water Heaters</li>
                        <li>Dishwashers</li>
                        <li>Water Lines</li></b>
                        <li>Gas Lines</li>
                        <li>Gas Meters</li>
					</i></ul>
					<p>We are OQ/D.O.T. Certified By Dominion & Columbia Gas</p>
					<a class="dmBackToTop" id="dmBackToTop" style="opacity: 1; visibility: visible;" onclick="$.mobile.silentScroll(0)"></a>
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
                                <li><a href="#services" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>
                    <img src="img/slider-images/07.jpg" alt="">
					<h2>Commercial Services</h2>
                    <h4>A-Z Plumbing Provides Complete Commercial Plumbing</h4>
                    <p>installations, repairs, and sewer and drain cleaning services across Cuyahoga, Geagua and Lake Counties. We can clean drains,
                        jet lines, pump grease traps and liquid waste and fulfill all the plumbing needs of your company, restaurant, retail outlet, or commercial property.</p>
					<h4>Repair, Sales And Installation Of:</h4>

					<ul><i>
						<li>Sinks, Toilets, Tubs, Piping, Fixtures, Disposers, Water Heaters.</li>
						<li>Furnaces and Water Heaters Sales, installation, Repair, Replace, Service.</li>
						<li>Sewer & Drain Cleaning.</li>
						<li>Video Camera Inspections of Sewers & Drains.</li>
						<li>Leak Repairs.</li>
						<li>Water & Gas Re-pipes.</li>
						<li>Leak Detection.</li>
						<li>Backflow & Anti-Siphon Devices.</li>
						<li>High Velocity Jetting Services.</li>
						<li>Grease Traps - Install or Clean.</li>
						<li>Kitchen & Bath Remodeling.</li>	
						<li>Water Filtration Systems.</li>
						<li>Preventive Maintenance.</li>
						<li>Septic Repair & Maintenance.</li>
					</i></ul>
						<hr>
					<h4>For a free estimate with up-front pricing, A-Z Plumbing is the answer for all your commercial plumbing needs.</h4>

					<ul><i>
						<li>Drain Cleaning</li>
						<li>Water Heaters</li>
						<li>Equipment Connections</li>
						<li>Grease Trap Cleaning</li>
						<li>Bathroom & Kitchen Remodeling</li>
						<li>Home Additions</li>
						<li>New Construction</li>
						<li>Tenant Fit-up</li>
						<li>Gas Piping</li>
					</i></ul>
					<a class="dmBackToTop" id="dmBackToTop" style="opacity: 1; visibility: visible;" onclick="$.mobile.silentScroll(0)"></a>
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
                                <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Coupons</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
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
                    <a class="dmBackToTop" id="dmBackToTop" style="opacity: 1; visibility: visible;" onclick="$.mobile.silentScroll(0)"></a>
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
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>
                    <img src="img/slider-images/09.jpg" alt="">
                    <h2>Money Saving Coupons</h2>

                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">$55 Off</p>
                            <p>Any  Plumbing Service</p>
                            	<p><i>Not valid with any other offer.</i></p>
                            <a href="http://callyourplumber.com/coupons/coupon6-v-any-1.pdf"><h6>click to print</h6></a>

                        </div>
                        <div class="ui-block-b">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">$35 Off</p>
                            <p>Any Drain Cleaning Service</p>
                                <p><i>Not valid with any other offer.</i></p>
                            <a href="http://callyourplumber.com/coupons/coupon7-v-any.pdf"><h6>click to print</h6></a>
                        </div>
                        <div class="ui-block-a">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">FREE!</p>
                            <p>Video Camera Inspection -
                                with main sewerline cleaning</p>
                                <p><i>Not valid with any other offer.</i></p>
							<a href="http://callyourplumber.com/coupons/coupon1-v-camerainspection-1.pdf"><h6>click to print</h6></a>
                        </div>
                        <div class="ui-block-b">
                            <img src="img/a-z-logo.jpg" vspace="5">
                            <p style="font-size:26px;">$75 Off</p>
                            <p>Hot Water Heater, Installed</p>
                                <p><i>Not valid with any other offer.</i></p>
                            <a href="http://callyourplumber.com/coupons/coupon3-v-hotwater.pdf"><h6>click to print</h6></a>
                        </div>
                    </div>
					<a class="dmBackToTop" id="dmBackToTop" style="opacity: 1; visibility: visible;" onclick="$.mobile.silentScroll(0)"></a>
				</div>
			</div>
		
		</div>
		<!--patientform ends coupon///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<!--newbuffalo shedule///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

		<div id="newbuffalo" data-role="page" data-theme="<?php echo $theme ?>">				
			<div class="form-all">
  				<ul class="form-section">
      				<li class="form-line jf-required" data-type="control_radio" id="id_11">
      		  	<label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
          			Is the service for
          		<span class="form-required">
            	*
          		</span>
      		  </label>
      		<div id="cid_11" class="form-input jf-required">
          		<div class="form-single-column">
            		<span class="form-radio-item" style="clear:left;">
            		  <input type="radio" class="form-radio validate[required]" id="input_11_0" name="q11_isThe" value="Your Home">
            		  <label for="input_11_0"> Your Home </label>
            		</span>
            		<span class="clearfix">
            		</span>
		
            		<span class="form-radio-item" style="clear:left;">
            		  <input type="radio" class="form-radio validate[required]" id="input_11_1" name="q11_isThe" value="Your Business">
            		  <label for="input_11_1"> Your Business </label>
            		</span>
		
            		<span class="clearfix">
            		</span>

          		</div>
      		</div>
      				</li>

      		<li class="form-line" data-type="control_datetime" id="id_19">
      		  <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19"> Select a convenient date and time for your appointment. </label>
      		  
      		  <div id="cid_19" class="form-input jf-required">
          		<span class="form-sub-label-container" style="vertical-align: top">
            	<input class="form-textbox" id="month_19" name="q19_selectA[month]" type="tel" size="2" maxlength="2" value="02">
            	<span class="date-separate">
              	&nbsp;-
            	</span>
            		<label class="form-sub-label" for="month_19" id="sublabel_month" style="min-height: 13px;"> Month </label>
          		</span>
          		<span class="form-sub-label-container" style="vertical-align: top">
          		  <input class="form-textbox" id="day_19" name="q19_selectA[day]" type="tel" size="2" maxlength="2" value="23">
          		  <span class="date-separate">
          		    &nbsp;-
          		</span>
          		  <label class="form-sub-label" for="day_19" id="sublabel_day" style="min-height: 13px;"> Day </label>
          		</span>
		
          		<span class="form-sub-label-container" style="vertical-align: top">
          		  <input class="form-textbox" id="year_19" name="q19_selectA[year]" type="tel" size="4" maxlength="4" value="2015">
          		  <label class="form-sub-label" for="year_19" id="sublabel_year" style="min-height: 13px;"> Year </label>
          		</span>
		
          		<span class="form-sub-label-container" style="vertical-align: top">
          		  <img class="showAutoCalendar" alt="Pick a Date" id="input_19_pick" src="http://d2g9qbzl5h49rh.cloudfront.net/images/calendar.png" align="absmiddle">
          		  <label class="form-sub-label" for="input_19_pick" style="min-height: 13px;">  </label>
          		</span>

      			</div>
      			</li>

      		<li class="form-line" data-type="control_radio" id="id_13">
      		  <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> Time </label>
      		  <div id="cid_13" class="form-input jf-required">
          		<div class="form-single-column">
            		<span class="form-radio-item" style="clear:left;">
              		<input type="radio" class="form-radio" id="input_13_0" name="q13_time" value="Morning (8 a.m. - Noon)">
              		<label for="input_13_0"> Morning (8 a.m. - Noon) </label>
            		</span>
            		<span class="clearfix">
            		</span>
            		<span class="form-radio-item" style="clear:left;">
            		  <input type="radio" class="form-radio" id="input_13_1" name="q13_time" value="Afternoon (Noon - 5 p.m.)">
            		  <label for="input_13_1"> Afternoon (Noon - 5 p.m.) </label>
            		</span>
            		<span class="clearfix">
            		</span>
            		<span class="form-radio-item" style="clear:left;">
            		  <input type="radio" class="form-radio" id="input_13_2" name="q13_time" value="Evening (5 p.m. - 8 p.m.)">
            		  <label for="input_13_2"> Evening (5 p.m. - 8 p.m.) </label>
            		</span>
            		<span class="clearfix">
            		</span>
          		</div>
      		  </div>
      		</li>

      		<li class="form-line" data-type="control_checkbox" id="id_14">
      		  <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14"> Select a service type: </label>
      		  <div id="cid_14" class="form-input jf-required">
          <div class="form-single-column">
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_0" name="q14_selectA14[]" value="Sewer/drain">
              <label for="input_14_0"> Sewer/drain </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_1" name="q14_selectA14[]" value="Clogged sink">
              <label for="input_14_1"> Clogged sink </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_2" name="q14_selectA14[]" value="Clogged shower/tub">
              <label for="input_14_2"> Clogged shower/tub </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_3" name="q14_selectA14[]" value="Broken pipe">
              <label for="input_14_3"> Broken pipe </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_4" name="q14_selectA14[]" value="Other Drain">
              <label for="input_14_4"> Other Drain </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_5" name="q14_selectA14[]" value="Faucet/fixture">
              <label for="input_14_5"> Faucet/fixture </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_6" name="q14_selectA14[]" value="Toilet">
              <label for="input_14_6"> Toilet </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_7" name="q14_selectA14[]" value="Disposer">
              <label for="input_14_7"> Disposer </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_8" name="q14_selectA14[]" value="Water heater">
              <label for="input_14_8"> Water heater </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <input type="checkbox" class="form-checkbox" id="input_14_9" name="q14_selectA14[]" value="Other Plumbing">
              <label for="input_14_9"> Other Plumbing </label>
            </span>
            <span class="clearfix">
            </span>
          </div>
      		  </div>
      		</li>
      		<li class="form-line" data-type="control_textarea" id="id_15">
      		  <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> Tell us more about your request: </label>
      		  <div id="cid_15" class="form-input jf-required">
      		    <textarea id="input_15" class="form-textarea custom-hint-group form-custom-hint" name="q15_tellUs15" cols="40" rows="6" 
      		    data-customhint="Attention Webmasters &amp; SEO Experts - Please do NOT use this form to contact us. 
      		    This form is intended ONLY for customers of A to Z Plumbing If you use this form, it will be deleted as spam." customhinted="true" spellcheck="false">
      		    </textarea>
      		  </div>
      		</li>
      		<li class="form-line jf-required" data-type="control_fullname" id="id_7">
      		  <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
          Full Name
          <span class="form-required">
            *
          </span>
      		  </label>
      		  <div id="cid_7" class="form-input jf-required">
      		    <span class="form-sub-label-container" style="vertical-align: top">
      		      <input class="form-textbox validate[required]" type="text" size="10" name="q7_fullName7[first]" id="first_7">
      		      <label class="form-sub-label" for="first_7" id="sublabel_first" style="min-height: 13px;"> First Name </label>
      		    </span>
      		    <span class="form-sub-label-container" style="vertical-align: top">
      		      <input class="form-textbox validate[required]" type="text" size="15" name="q7_fullName7[last]" id="last_7">
      		      <label class="form-sub-label" for="last_7" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
      		    </span>
      		  </div>
      		</li>
      		<li class="form-line" data-type="control_address" id="id_17">
      		  <label class="form-label form-label-left form-label-auto" id="label_17" for="input_17"> Address </label>
      		  <div id="cid_17" class="form-input jf-required">
      		    <table summary="" undefined="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
      		      <tbody><tr>
      		        <td colspan="2">
      		          <span class="form-sub-label-container" style="vertical-align: top">
      		            <input class="form-textbox form-address-line" type="text" name="q17_address[addr_line1]" id="input_17_addr_line1">
      		            <label class="form-sub-label" for="input_17_addr_line1" id="sublabel_17_addr_line1" style="min-height: 13px;"> Street Address </label>
      		          </span>
      		        </td>
      		      </tr>
      		      <tr>
      		        <td colspan="2">
      		          <span class="form-sub-label-container" style="vertical-align: top">
      		            <input class="form-textbox form-address-line" type="text" name="q17_address[addr_line2]" id="input_17_addr_line2" size="46">
      		            <label class="form-sub-label" for="input_17_addr_line2" id="sublabel_17_addr_line2" style="min-height: 13px;"> Street Address Line 2 </label>
      		          </span>
      		        </td>
      		      </tr>
      		      <tr>
      		        <td width="50%">
      		          <span class="form-sub-label-container" style="vertical-align: top">
      		            <input class="form-textbox form-address-city" type="text" name="q17_address[city]" id="input_17_city" size="21">
      		            <label class="form-sub-label" for="input_17_city" id="sublabel_17_city" style="min-height: 13px;"> City </label>
      		          </span>
      		        </td>
      		        <td>
      		          <span class="form-sub-label-container" style="vertical-align: top">
      		            <input class="form-textbox form-address-state" type="text" name="q17_address[state]" id="input_17_state" size="22">
      		            <label class="form-sub-label" for="input_17_state" id="sublabel_17_state" style="min-height: 13px;"> State / Province </label>
      		          </span>
      		        </td>
      		      </tr>
      		      <tr>
              <td width="50%">
                <span class="form-sub-label-container" style="vertical-align: top">
                  <input class="form-textbox form-address-postal" type="text" name="q17_address[postal]" id="input_17_postal" size="10">
                  <label class="form-sub-label" for="input_17_postal" id="sublabel_17_postal" style="min-height: 13px;"> Postal / Zip Code </label>
                </span>
              </td>
              <td>
                <span class="form-sub-label-container" style="vertical-align: top">
                  <select class="form-dropdown form-address-country" defaultcountry="United States" name="q17_address[country]" id="input_17_country">
                    <option value="" selected=""> Please Select </option>
                    <option selected="selected" value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="People's Republic of China"> People's Republic of China </option>
                    <option value="Republic of China"> Republic of China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="Swaziland"> Swaziland </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="Isle of Man"> Isle of Man </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>
                  <label class="form-sub-label" for="input_17_country" id="sublabel_17_country" style="min-height: 13px;"> Country </label>
                </span>
              </td>
      		      </tr>
      		    </tbody></table>
      		  </div>
      		</li>
      		<li class="form-line jf-required" data-type="control_phone" id="id_9">
      		  <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
          Home Phone
          <span class="form-required">
            *
          </span>
      		  </label>
      		  <div id="cid_9" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="tel" name="q9_homePhone[area]" id="input_9_area" size="3">
            <span class="phone-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="input_9_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="tel" name="q9_homePhone[phone]" id="input_9_phone" size="8">
            <label class="form-sub-label" for="input_9_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>
          </span>
      		  </div>
      		</li>
      		<li class="form-line" data-type="control_phone" id="id_18">
      		  <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18"> Cell Phone </label>
      		  <div id="cid_18" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="tel" name="q18_cellPhone[area]" id="input_18_area" size="3">
            <span class="phone-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="input_18_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="tel" name="q18_cellPhone[phone]" id="input_18_phone" size="8">
            <label class="form-sub-label" for="input_18_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>
          </span>
      		  </div>
      		</li>
      		<li class="form-line jf-required" data-type="control_email" id="id_8">
      		  <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8">
          E-mail
          <span class="form-required">
            *
          </span>
      		  </label>
      		  <div id="cid_8" class="form-input jf-required">
      		    <input type="email" class=" form-textbox validate[required, Email]" id="input_8" name="q8_email8" size="20" value="" placeholder="ex: myname@example.com">
      		  </div>
      		</li>
      		<li class="form-line" data-type="control_button" id="id_6">
      		  <div id="cid_6" class="form-input-wide">
          <div style="text-align:center" class="form-buttons-wrapper">
            <button id="input_6" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
      		  </div>
      		</li>
      		<li style="display:none">
      		  Should be Empty:
      		  <input type="text" name="website" value="">
      		</li>
  						  </ul>
  						</div>
  						<input type="hidden" id="simple_spc" name="simple_spc" value="1253545703-1253545703">
  						<script type="text/javascript">
  						document.getElementById("si" + "mple" + "_spc").value = "1253545703-1253545703";
  						</script>
					</form>
				</div>
			</div>
		
		</div>
		<!--newbuffalo ends shedule///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!--page succes ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

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
