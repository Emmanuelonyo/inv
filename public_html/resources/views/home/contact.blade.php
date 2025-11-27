<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
	<title>{{$settings->site_name}} || Investment solutions designed with elegance and finesse</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/app/public/'.$settings->favicon)}}">
	<!-- Google Fonts css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100..1000&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="public/m/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav css -->
	<link href="public/m/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper css -->
	<link rel="stylesheet" href="public/m/css/swiper-bundle.min.css">
	<!-- Font Awesome icon css-->
	<link href="public/m/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated css -->
	<link href="public/m/css/animate.css" rel="stylesheet">
	<!-- Magnific css -->
	<link href="public/m/css/magnific-popup.css" rel="stylesheet">
	<!-- Main custom css -->
	<link href="public/m/css/custom.css" rel="stylesheet" media="screen">
</head>

<body class="tt-magic-cursor">


	<!-- Magic Cursor Start -->
	<div id="magic-cursor">
		<div id="ball"></div>
	</div>
	<!-- Magic Cursor End -->

	<!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
						<img src="{{ asset('storage/app/public/'.$settings->logo)}}" height="70" width="136" alt="Logo">
					</a>
					<!-- Logo End -->

					<!-- Main Menu start -->
					<div class="collapse navbar-collapse main-menu">
						<ul class="navbar-nav mr-auto" id="menu">
							<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about">About us</a></li>
							<li class="nav-item"><a class="nav-link" href="about">FAQ</a></li>
							<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="register">Create Account</a></li>
							<li class="nav-item highlighted-menu"><a class="nav-link" href="login">Sign in</a></li>
						</ul>
					</div>
					<!-- Main Menu End -->

					<div class="navbar-toggle"></div>
				</div>
			</nav>

			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->


	<!-- Page Header Section Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Subpage Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime">Contact</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">Home/</a></li>
								<li class="active" aria-current="page">Contact</li>
							</ol>
						</nav>
					</div>
					<!-- Subpage Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Section End -->

	<!-- Contact Details Section Start -->
	<div class="contact-details">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3>Conatct Us</h3>
						<h2>Our Contact Information</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-12">
					<!-- Contact Detail Item Start -->
					<div class="contact-detail-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="icon-box">
							<img src="images/icon-address.svg" alt="">
						</div>
						
						<div class="contact-detail-body">
							<h3>Our Address</h3>
							<p>55 Aylmer Road, East Finchley, London, United Kingdom, N2 0AT</p>
						</div>
					</div>
					<!-- Contact Detail Item End -->
				</div>

				<div class="col-lg-4 col-12">
					<!-- Contact Detail Item Start -->
					<div class="contact-detail-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="icon-box">
							<img src="images/icon-contact-info.svg" alt="">
						</div>

						<div class="contact-detail-body">
							<h3>Contact Info</h3>
							<p><strong>
								Mobile: <a href="#">(+44) 123 456 789</a>
								<br>
								Email: <a href="#">{{$settings->contact_email}}</a>
							</strong></p>
						</div>
					</div>
					<!-- Contact Detail Item End -->
				</div>

				<div class="col-lg-4 col-12">
					<!-- Contact Detail Item Start -->
					<div class="contact-detail-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="icon-box">
							<img src="images/icon-hours-operation.svg" alt="">
						</div>

						<div class="contact-detail-body">
							<h3>Hours of Operation</h3>
							<p><strong>
								Mon - Sat: 8:00 - 15:00
								<br>
								Sunday: Closed
							</strong></p>
						</div>
					</div>
					<!-- Contact Detail Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Details Section End -->

	<!-- Contact Form Section Start -->
	<div class="contact-inquiry-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Get in Touch</h3>
						<h2 class="text-anime">Free to Drop Us a Message</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<!-- Contact Form start -->
					<div class="contact-form wow fadeInUp" data-wow-delay="0.5s">
						<form id="contactForm" action="#" method="POST" data-toggle="validator">
							<div class="row">
								<div class="form-group col-md-6 mb-4">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required >
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="email" name ="email" class="form-control" id="email" placeholder="Email Address" required >
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required >
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required >
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-12 mb-4">
									<textarea name="msg" class="form-control" id="message" rows="5" placeholder="Write Your Message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>

								<div class="col-md-12 text-center">
									<button type="submit" class="btn-default">Send Message</button>
									<div id="msgSubmit" class="h3 text-left hidden"></div>
								</div>
							</div>
						</form>
					</div>
					<!-- Contact Form end -->
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Form Section End -->

	<!-- Google Map Section Start -->
	<div class="google-location-map">
		<div class="container">
			<div class="no-gap row">
				<div class="col-12">
					<!-- Google Map Iframe Start -->
					<div class="google-map-box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1116357.3481785401!2d-95.54669749945178!3d39.389498766353576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1707738120250!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<!-- Google Map Iframe End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Google Map Section End -->

	<!-- Footer Start -->
	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Footer Newsletters Start -->
					<div class="footer-newsletters">
						<div class="row">
							<div class="col-lg-6">
								<!-- Newsletter Title Start -->
								<div class="newsletter-title">
									<div class="icon-box">
										<img src="public/m/images/icon-stay-info.svg" alt="">
									</div>

									<h2>Stay Informed And Never Miss An {{$settings->site_name}} Update!</h2>
								</div>
								<!-- Newsletter Title End -->
							</div>

							<div class="col-lg-6">
								<!-- Newsletter Form Start -->
								<div class="newsletter-form">
									<form id="newsletter_form" action="#" data-toggle="validator">
										<div class="row no-gap align-items-center">
											<div class="form-group col-md-8">
												<input type="email" name="email" class="form-control" id="news_email" placeholder="Enter Your Email Address" required="">
												<div class="help-block with-errors"></div>
											</div>										
			
											<div class="col-md-4 text-end">
												<button type="submit" class="btn-default disabled">Subscribe Now</button>
												<div id="news_letter_Submit" class="h3 text-left hidden"></div>
											</div>
										</div>
									</form>
								</div>
								<!-- Newsletter Form End -->
							</div>
						</div>
					</div>
					<!-- Footer Newsletters End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Mega Footer Start -->
					<div class="mega-footer">
						<div class="row">
							<div class="col-lg-3 col-12">
								<!-- Footer About Start -->
								<div class="footer-about">
									<!-- Footer Logo Start -->
									<div class="footer-logo">
										<img src="{{ asset('storage/app/public/'.$settings->logo)}}" alt="">
									</div>
									<!-- Footer Logo End -->

									<!-- Footer About Content Start -->
									<div class="footer-about-content">
										<p>Crest AI makes cryptocurrency simple, secure, and accessible for everyone—whether you're a beginner or a seasoned trader. Start your journey today..</p>
									</div>
									<!-- Footer About Content End -->

									<!-- Footer Social Links Start -->
									<div class="footer-social-links">
										<ul>
											<li><a href="https://web.facebook.com/61576247865341"><i class="fa-brands fa-facebook-f"></i></a></li>
											<li><a href="https://x.com/crest_ai"><i class="fa-brands fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
										</ul>
									</div>
									<!-- Footer Social Links End -->
								</div>
								<!-- Footer About End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<!-- Footer Title Start -->
									<div class="footer-title">
										<h3>Quick Links</h3>
									</div>
									<!-- Footer Title End -->
									
									<div class="footer-menu">
										<ul>
											<li><a href="/">Home</a></li>
											<li><a href="about">About Us</a></li>
											<li><a href="contact">Contact</a></li>
										</ul>
									</div>
								</div>
								<!-- Footer Links End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Links Start -->
								<div class="footer-links">
									<!-- Footer Title Start  -->
									<div class="footer-title">
										<h3>Accounts</h3>
									</div>
									<!-- Footer Title End -->
									
									<div class="footer-menu">
										<ul>
											<li><a href="login">Login</a></li>
											<li><a href="register">Create Account</a></li>
										</ul>
									</div>
								</div>
								<!-- Footer Links End -->
							</div>

							<div class="col-lg-3 col-md-4">
								<!-- Footer Contact information Start -->
								<div class="footer-contact-information">
									<!-- Footer Title Start -->
									<div class="footer-title">
										<h3>Contact Information</h3>
									</div>
									<!-- Footer Title End -->

									<div class="footer-contact-info">
										<!-- Footer Contact info Item Start -->
										<div class="footer-contact-info-item">
											<div class="icon-box">
												<i class="fa-solid fa-phone"></i>
											</div>

											<p>{{$settings->whatsapp}}</p>
										</div>
										<!-- Footer Contact info Item End -->

										<!-- Footer Contact info Item Start -->
										<div class="footer-contact-info-item">
											<div class="icon-box">
												<i class="fa-solid fa-envelope"></i>
											</div>

											<p>{{$settings->contact_email}}</p>
										</div>
										<!-- Footer Contact info Item End -->

										<!-- Footer Contact info Item Start -->
										<div class="footer-contact-info-item">
											<div class="icon-box">
												<i class="fa-solid fa-location-dot"></i>
											</div>

											<p>{{$settings->address_o}}</p>
										</div>
										<!-- Footer Contact info Item End -->
									</div>
								</div>
								<!-- Footer Contact information End -->
							</div>
						</div>
					</div>
					<!-- Mega Footer End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Copyright Footer Start -->
					<div class="footer-copyrights">
						<div class="row align-items-center">
							<div class="col-md-6">
								<!-- Copyright Content Start -->
								<div class="footer-copyright">
									<p>Copyright &copy; 2025 {{$settings->site_name}}. All Rights Reserved.</p>
								</div>
								<!-- Copyright Content End -->
							</div>

							<div class="col-md-6">
								<!-- Footer Policy Menu Start -->
								<div class="footer-policy-menu">
									<ul>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Terms of Use</a></li>
									</ul>
								</div>
								<!-- Footer Policy Menu End -->
							</div>
						</div>
					</div>
					<!-- Copyright Footer End -->
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

		<!-- Jquery Library File -->
	<script src="public/m/js/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="public/m/js/bootstrap.min.js"></script>
	<!-- Validator js file -->
	<script src="public/m/js/validator.min.js"></script>
	<!-- SlickNav js file -->
	<script src="public/m/js/jquery.slicknav.js"></script>
	<!-- Swiper js file -->
	<script src="public/m/js/swiper-bundle.min.js"></script>
	<!-- Counter js file -->
	<script src="public/m/js/jquery.waypoints.min.js"></script>
	<script src="public/m/js/jquery.counterup.min.js"></script>
	<!-- Magnific js file -->
	<script src="public/m/js/jquery.magnific-popup.min.js"></script>
	<!-- SmoothScroll -->
	<script src="public/m/js/SmoothScroll.js"></script>
	<!-- Parallax js -->
	<script src="public/m/js/parallaxie.js"></script>
	<!-- MagicCursor js file -->
	<script src="public/m/js/gsap.min.js"></script>
	<script src="public/m/js/magiccursor.js"></script>
	<!-- Text Effect js file -->
	<script src="public/m/js/splitType.js"></script>
	<script src="public/m/js/ScrollTrigger.min.js"></script>
	<!-- YTPlayer js file -->
	<script src="public/m/js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Wow js file -->
	<script src="public/m/js/wow.js"></script>
	<!-- Main Custom js file -->
	<script src="public/m/js/function.js"></script>
</body>


</html>