@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
    
    use App\Models\Plans;
    $plans = Plans::where('type', 'main')->get();
@endphp
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
	<title>{{$settings->site_name}} | Trading solutions designed with elegance and finesse</title>
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
					<a class="navbar-brand" href="">
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

	<!-- Hero Section Start -->
	<div class="hero parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<!-- Hero Left Content Start -->
					<div class="hero-content">
						<div class="section-title">
							<h3 class="wow fadeInUp">Welcome to {{$settings->site_name}}</h3>
							<h1 class="text-anime">Easy Way to Key into Success.</h1>
						</div>
						<div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
							<p>{{$settings->site_name}} makes cryptocurrency simple, secure, and accessible for everyone—whether you're a beginner or a seasoned trader. Start your journey today.</p>
						</div>

						<div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
							<a href="register" class="btn-default">Join for Free</a>
						</div>
					</div>
					<!-- Hero Left Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Hero Section End -->

	
	<!-- About us Section Start -->
	<div class="about-us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">About {{$settings->site_name}}</h3>
						<h2 class="text-anime">Simple. Faster. Secure</h2>
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

							<div class="about-info-item wow fadeInUp" data-wow-delay="0.5s">
								<div class="icon-box">
									<img src="public/m/images/icon-bitcoin-exchange.svg" alt="">
								</div>

								<h5>CrestAI Trades</h5>
							</div>
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
							<a href="#" class="btn-default">Read More</a>
						</div>
					</div>
					<!-- About Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- About us Section End -->

	<!-- Why Choose us Section Start -->
	<div class="why-choose-us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Why Choose us ?</h3>
						<h2 class="text-anime">Know More About {{$settings->site_name}}</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<!-- Why Choose us Item Start -->
					<div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="icon-box">
							<img src="public/m/images/icon-why-choose-us-1.svg" alt="">
						</div>

						<h3>Safe & Secure</h3>
						<p>Bank-level protection for your assets.
							We use multi-signature wallets, cold storage, and 2FA to ensure your crypto stays safe from threats—so you can trade with peace of mind.
						</p>
					</div>
					<!-- Why Choose us Item End -->
				</div>

				<div class="col-md-4">
					<!-- Why Choose us Item Start -->
					<div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="icon-box">
							<img src="public/m/images/icon-why-choose-us-2.svg" alt="">
						</div>

						<h3>Early Bonus</h3>
						<p>Join now, earn more.
							New users get a 10% bonus on their first deposit* to kickstart their trading journey. (Limited time offer.)
						</p>
					</div>
					<!-- Why Choose us Item End -->
				</div>

				<div class="col-md-4">
					<!-- Why Choose us Item Start -->
					<div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="icon-box">
							<img src="public/m/images/icon-why-choose-us-3.svg" alt="">
						</div>

						<h3>Several Profit</h3>
						<p>Grow your portfolio smarter.
							Stake, trade, or earn passive income with our yield tools—all under one roof.
						</p>
					</div>
					<!-- Why Choose us Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Why Choose us Section End -->

	<!-- Our Services Section Start -->
	<div class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Our Services</h3>
						<h2 class="text-anime">Explore {{$settings->site_name}} Services</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-services-1.svg" alt="">
						</div>

						<h3>Smart Trading Modules</h3>
						<p>Maximize profits with AI-driven strategies.
							Our automated trading tools analyze market trends and execute trades at optimal times, so you don’t miss opportunities—even while you sleep.
						</p>
					</div>
					<!-- Service Item End -->
				</div>

				<div class="col-lg-4 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item active wow fadeInUp" data-wow-delay="0.5s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-services-2.svg" alt="">
						</div>

						<h3>Adaptive Social Assistant</h3>
						<p>Trade smarter with real-time sentiment analysis.
							Track social media buzz, news trends, and influencer activity to gauge market movements before they happen.
						</p>
					</div>
					<!-- Service Item End -->
				</div>

				<div class="col-lg-4 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-services-3.svg" alt="">
						</div>

						<h3>Analyze the News with our powerful AI</h3>
						<p>Turn headlines into actionable insights.
							Our AI scans global news, earnings reports, and regulatory updates to predict crypto volatility and suggest strategic moves.
						</p>
					</div>
					<!-- Service Item End -->
				</div>

				<div class="col-lg-4 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item wow fadeInUp" data-wow-delay="1.0s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-services-4.svg" alt="">
						</div>

						<h3>Exchange Order Management</h3>
						<p>Seamless control across platforms.
							Manage orders, set stop-loss limits, and sync trades across multiple exchanges from one intuitive dashboard.
						</p>
					</div>
					<!-- Service Item End -->
				</div>

				<div class="col-lg-4 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item wow fadeInUp" data-wow-delay="1.25s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-services-5.svg" alt="">
						</div>

						<h3>Module of Price Notification</h3>
						<p>Never miss a market shift.
							Get instant SMS/email alerts when your target assets hit key price points—so you can act fast.
						</p>
					</div>
					<!-- Service Item End -->
				</div>

				<div class="col-lg-4 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item wow fadeInUp" data-wow-delay="1.50s">
						<div class="icon-box">
							<img src="public/m/images/icon-our-services-6.svg" alt="">
						</div>

						<h3>Crypto Trading Platform</h3>
						<p>Trade 100+ coins with institutional-grade tools.
							Low fees, lightning-fast execution, and deep liquidity for both beginners and advanced traders.
						</p>
					</div>
					<!-- Service Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Services Section End -->

	<!-- Intro Video Section Start -->
	<div class="intro-video">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Our Dashboard</h3>
						<h2 class="text-anime">Watch Our Demo Video</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Intro Video Box Start -->
					<div class="intro-video-box">
						<div class="intro-video-image">
							<img src="public/images/dash.png" alt="">
						</div>

						<div class="video-play-button">
							<a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
								<img src="public/m/images/play.svg" alt="">
							</a>
						</div>
					</div>
					<!-- Intro Video Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Intro Video Section End -->

			<!-- Testimonial Section Start -->
	<div class="testimonials">
		<div class="container-fluid">
			<div class="row no-gap">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">Client Review</h3>
						<h2 class="text-anime">Client Testimonials</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row no-gap">
				<div class="col-md-12">
					<!-- Testimonial Carousel Start -->
					<div class="testimonial-carousel">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<!-- Testimonial Item Start -->
									<div class="testimonial-item">
										<div class="testimonial-body">
											<p>I was nervous about trading, but {{$settings->site_name}} made it so simple. Their tutorials and 24/7 support helped me earn my first $1K in weeks!</p>
										</div>

										<div class="testimonial-header">
											<div class="author-image">
												<!-- <img src="public/m/images/author-1.jpg" alt=""> -->
											</div>

											<div class="author-info">
												<h3>Olivia Bartlett</h3>
												<p>(Freelancer)</p>
											</div>
										</div>
									</div>
									<!-- Testimonial Item End -->
								</div>

								<div class="swiper-slide">
									<!-- Testimonial Item Start -->
									<div class="testimonial-item">
										<div class="testimonial-body">
											<p>The AI price alerts and lightning-fast execution give me an edge. I’ve doubled my daily trades since switching to {{$settings->site_name}}.</p>
										</div>

										<div class="testimonial-header">
											<div class="author-image">
												<!-- <img src="public/m/images/author-2.jpg" alt="">-->
											</div>

											<div class="author-info">
												<h3>Charles Park</h3>
												<p>(trader)</p>
											</div>
										</div>
									</div>
									<!-- Testimonial Item End -->
								</div>

								<div class="swiper-slide">
									<!-- Testimonial Item Start -->
									<div class="testimonial-item">
										<div class="testimonial-body">
											<p>With hacks everywhere, {{$settings->site_name}}’s cold storage and 2FA were deciding factors. My assets have never felt safer.</p>
										</div>

										<div class="testimonial-header">
											<div class="author-image">
												<!-- <img src="public/m/images/author-3.jpg" alt="">-->
											</div>

											<div class="author-info">
												<h3>Alison Banson</h3>
												<p>(Senior Consultant)</p>
											</div>
										</div>
									</div>
									<!-- Testimonial Item End -->
								</div>

								<div class="swiper-slide">
									<!-- Testimonial Item Start -->
									<div class="testimonial-item">
										<div class="testimonial-body">
											<p>I earn 12% APY staking Ethereum here—way higher than my old platform. Withdrawals take seconds, not days.</p>
										</div>

										<div class="testimonial-header">
											<div class="author-image">
												<!-- <img src="public/m/images/author-4.jpg" alt=""> -->
											</div>

											<div class="author-info">
												<h3>Tracey Hawkins</h3>
												<p>(Investor)</p>
											</div>
										</div>
									</div>
									<!-- Testimonial Item End -->
								</div>

								<div class="swiper-slide">
									<!-- Testimonial Item Start -->
									<div class="testimonial-item">
										<div class="testimonial-body">
											<p>Low fees and multi-language support? Finally, an exchange that gets international traders!</p>
										</div>

										<div class="testimonial-header">
											<div class="author-image">
												<!-- <img src="public/m/images/author-5.jpg" alt=""> -->
											</div>

											<div class="author-info">
												<h3>Christopher Case</h3>
												<p>(Senior Consultant)</p>
											</div>
										</div>
									</div>
									<!-- Testimonial Item End -->
								</div>

								<div class="swiper-slide">
									<!-- Testimonial Item Start -->
									<div class="testimonial-item">
										<div class="testimonial-body">
											<p>{{$settings->site_name}}’s seamless bridge to DeFi protocols saves me hours. I access farming pools without juggling 10 wallets.</p>
										</div>

										<div class="testimonial-header">
											<div class="author-image">
												<!-- <img src="public/m/images/author-6.jpg" alt=""> -->
											</div>

											<div class="author-info">
												<h3>Edward Johns</h3>
												<p>(Blogger)</p>
											</div>
										</div>
									</div>
									<!-- Testimonial Item End -->
								</div>
							</div>	
						</div>
					</div>
					<!-- Testimonial Carousel End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Section End -->

	

	<!-- Footer Start -->
	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Footer Newsletters Start -->
					<div class="footer-newsletters">
						<div class="row">
							<div class="col-lg-6">
								

							<div class="col-lg-6">
								
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
									<div class="footer-title">
										<h3>What We Do</h3>
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