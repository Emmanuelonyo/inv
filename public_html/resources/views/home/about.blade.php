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
						<h1 class="text-anime">About Us</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">Home/</a></li>
								<li class="active" aria-current="page">About us</li>
							</ol>
						</nav>
					</div>
					<!-- Subpage Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Section End -->

	<!-- About us Page Section Start -->
	<div class="about-us-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">About {{$settings->site_name}}</h3>
						<h2 class="text-anime">We empoer people to succeed</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-lg-6 col-12">
					<!-- About Images Start -->
					<div class="about-images">
						<div class="about-image">
							<figure class="image-anime reveal">
								<img src="public/m/images/robot.jpg" alt="">
							</figure>
						</div>

						<div class="about-image">
							<figure class="image-anime reveal">
								<img src="public/m/images/robotoid.jpg" alt="">
							</figure>

							<figure class="image-anime reveal">
								<img src="public/m/images/bots.jpg" alt="">
							</figure>
						</div>
					</div>
					<!-- About Images End -->
				</div>

				<div class="col-lg-6 col-12">
					<!-- About Content Start -->
					<div class="about-content">
						<div class="about-body wow fadeInUp" data-wow-delay="0.25s">
							<p>{{$settings->site_name}} is designed to empower users with a seamless trading experience. Our platform combines cutting-edge security with intuitive tools, so you can trade, convert, and grow your assets effortlessly.</p>

							<p>From automatic conversions to multi-asset support, {{$settings->site_name}} gives you the flexibility to manage your portfolio your way—anytime, anywhere.</p>
						</div>

						<div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
							<ul>
								<li>Designed for everyone</li>
								<li>Trade as you go</li>
								<li>All the tools you want</li>
								<li>Automatic conversion</li>
								<li>Multiple asset classes</li>
								<li>Simple to manage</li>
								<li>Scan. Convert. Pay.</li>
								<li>Quick to set up</li>
							</ul>
						</div>

						<div class="about-footer wow fadeInUp" data-wow-delay="0.75s">
							<div class="about-info-item">
								<h3><strong><span>10</span>+</strong> Years of Experience</h3>
							</div>
						</div>
					</div>
					<!-- About Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- About us Page Section End -->

	<!-- Our Benefits Section Start -->
	<div class="our-benefits">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Our Benefits</h3>
						<h2 class="text-anime">Benefits of Using Our Solution</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<!-- Our Benefits Item Start -->
					<div class="our-benefits-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-benefits-1.svg" alt="">
						</div>

						<h3>Real Time Update</h3>
						<p>Track price movements, order books, and your portfolio with zero delay. Our 100ms refresh rate ensures you never trade on outdated info.</p>
					</div>
					<!-- Our Benefits Item End -->
				</div>

				<div class="col-md-3">
					<!-- Our Benefits Item Start -->
					<div class="our-benefits-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-benefits-2.svg" alt="">
						</div>

						<h3>Cloud Based</h3>
						<p>Access your account securely from any device - no downloads needed. Trade on your laptop at work or check balances on your phone.</p>
					</div>
					<!-- Our Benefits Item End -->
				</div>

				<div class="col-md-3">
					<!-- Our Benefits Item Start -->
					<div class="our-benefits-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-benefits-3.svg" alt="">
						</div>

						<h3>No Transaction Fees</h3>
						<p>We profit when you profit. Enjoy truly commission-free spot trading on all major crypto pairs.</p>
					</div>
					<!-- Our Benefits Item End -->
				</div>

				<div class="col-md-3">
					<!-- Our Benefits Item Start -->
					<div class="our-benefits-item wow fadeInUp" data-wow-delay="1.0s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-benefits-4.svg" alt="">
						</div>

						<h3>Instant Operations</h3>
						<p>Deposits clear in 2 minutes, withdrawals in under 5. Our optimized blockchain routing eliminates waiting periods.</p>
					</div>
					<!-- Our Benefits Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Benefits Section End -->

	<!-- Counter Section Start -->
	<div class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<!-- Counter Item Start -->
					<div class="counter-item wow fadeInUp" data-wow-delay="0.25s">
						<h3>$<span class="counter">77.45</span>B</h3>
						<p>Market Cap</p>
					</div>
					<!-- Counter Item End -->
				</div>

				<div class="col-md-3 col-6">
					<!-- Counter Item Start -->
					<div class="counter-item wow fadeInUp" data-wow-delay="0.5s">
						<h3><span class="counter">165</span>k</h3>
						<p>Daily Transactions</p>
					</div>
					<!-- Counter Item End -->
				</div>

				<div class="col-md-3 col-6">
					<!-- Counter Item Start -->
					<div class="counter-item wow fadeInUp" data-wow-delay="0.75s">
						<h3><span class="counter">1726</span></h3>
						<p>Active Account</p>
					</div>
					<!-- Counter Item End -->
				</div>

				<div class="col-md-3 col-6">
					<!-- Counter Item Start -->
					<div class="counter-item wow fadeInUp" data-wow-delay="1.0s">
						<h3><span class="counter">10</span>+</h3>
						<p>Years on the Market</p>
					</div>
					<!-- Counter Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Counter Section End -->

	

	<!-- Our Vision Mission Start -->
	<div class="our-vision-mission">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!-- Visoin Mission Item Start -->
					<div class="vision-mission-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="vision-mission-header">
							<div class="icon-box">
								<img src="public/m/images/icon-mission.svg" alt="">
							</div>
							<h3>Our Mission</h3>
						</div>

						<div class="vision-mission-body">
							<p>Democratizing crypto trading for all.
								At {{$settings->site_name}}, we're breaking down barriers to cryptocurrency adoption. Through intuitive tools, institutional-grade security, and zero hidden fees, we empower everyone - from first-time traders to professional traders - to confidently participate in the digital economy.

								How we deliver:
								✔ Education-first approach with free learning resources
								✔ Military-grade encryption + multi-sig wallets
								✔ 24/7 human customer support
								✔ Transparent, low-cost access to 100+ coins
							</p>
						</div>
					</div>
					<!-- Visoin Mission Item End -->
				</div>

				<div class="col-md-6">
					<!-- Visoin Mission Item Start -->
					<div class="vision-mission-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="vision-mission-header">
							<div class="icon-box">
								<img src="public/m/images/icon-vision.svg" alt="">
							</div>
							<h3>Our Vision</h3>
						</div>

						<div class="vision-mission-body">
							<p>Building the world's most trusted crypto ecosystem.
								We envision a future where blockchain technology is as easy to use as online banking - without compromising decentralization's core values. By 2030, {{$settings->site_name}} will onboard 50M+ users to Web3 through:

								Next-generation features:
								→ AI-powered portfolio management
								→ One-click cross-chain swaps
								→ NFT-powered loyalty rewards
								→ Carbon-neutral mining partnerships
							</p>
						</div>
					</div>
					<!-- Visoin Mission Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Vision Mission End -->


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