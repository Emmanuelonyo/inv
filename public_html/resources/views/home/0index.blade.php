@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
    
    use App\Models\Plans;
    $plans = Plans::where('type', 'main')->get();
@endphp

<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Online Investment, Cryptocurrencies, Crypto Investment, Deposit, Investment, Earn profit" />
    <title>{{$settings->site_name}}|| Investment solutions designed with elegance and finesse</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/app/public/'.$settings->favicon)}}" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="public/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="public/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="public/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="public/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="public/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="public/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="public/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="public/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="public/vendors/conult-icons/style.css">
    <link rel="stylesheet" href="public/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="public/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="public/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="public/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="public/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="public/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="public/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="public/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="stylesheet" href="public/css/responsive.css" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('storage/app/public/'.$settings->favicon)}}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header main-header-three clearfix">
            <nav class="main-menu main-menu-three clearfix">
                <div class="main-menu-three__wrapper clearfix">
                    <div class="main-menu-three__wrapper-logo">
                        <a href="/">
							<img src="{{ asset('storage/app/public/'.$settings->logo)}}" width="176" alt="">
						</a>
                    </div>
                    <div class="main-menu-three__wrapper-main-menu">
                        <a href="#" class="mobile-nav__toggler">
							<i class="fa fa-bars"></i>
						</a>
                        <ul class="main-menu__list">
                            <li><a href="/">Home</a></li>
                            <li><a href="about">About</a></li>
                            <li><a href="faq">F.A.Q</a></li>
                            <li><a href="terms">Terms</a></li>
							<li><a href="register">Register</a></li>
							<li><a href="login">Login</a></li>
							<!--<li><a href="rate-us">Rate Us</a></li>-->
							<li><a href="contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

       <!--Brand One Start-->
	 <!--Main Slider Start-->
	 <section class="main-slider main-slider-three">
		<div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
			"effect": "fade",
			"pagination": {
				"el": "#main-slider-pagination",
				"type": "bullets",
				"clickable": true
			},
			"navigation": {
				"nextEl": "#main-slider__swiper-button-next",
				"prevEl": "#main-slider__swiper-button-prev"
			},
			"autoplay": {
				"delay": 5000
		}}'>
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="image-layer" style="background-image: url(public/images/vev_slider.jpg);"></div>
					<div class="main-slider-three-shape"><img src="public/images/shapes/main-slider-three-shape.png" alt=""></div>
					<!-- /.image-layer -->
					<div class="container">
						<div class="row">
							<div class="col-xl-7">
								<div class="main-slider__content">
									<h2>Dedicated to  <br>building professional relationships</h2>
									<p>
										We are a reputable, professional investment firm committed to operating 
										reliably, independently, transparently and sustainably at all times.
									</p>

									<div class="main-slider-three__bottom">
										<a href="login" class="thm-btn main-slider-three__btn">Invest Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="image-layer" style="background-image: url(public/images/vev_slider2.jpg);"></div>
					<div class="main-slider-three-shape">
						<img src="public/images/shapes/main-slider-three-shape.png" alt="">
					</div>
					<!-- /.image-layer -->
					<div class="container">
						<div class="row">
							<div class="col-xl-7">
								<div class="main-slider__content">
									<h2>Not only reliable, <br> also result-oriented</h2>
									<p>
										We strive to simplify our investment process so you have less stress and worry. 
										We manage, administer and control our members investments on a day-to-day 
										basis.
									</p>
									<div class="main-slider-three__bottom">
										<a href="register" class="thm-btn main-slider-three__btn">Join Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="image-layer" style="background-image: url(public/images/vev_slider3.jpg);"></div>
					<div class="main-slider-three-shape"><img src="public/images/shapes/main-slider-three-shape.png" alt=""></div>
				
					<div class="container">
						<div class="row">
							<div class="col-xl-7">
								<div class="main-slider__content">
									<h2>Tailor-made  <br> Investment Solutions</h2>
									<p>
										We provide high returns on investment,  Your satisfaction matters to us. 
										That is why we go the extra mile for you.
									</p>

									<div class="main-slider-three__bottom">
										<a href="login" class="thm-btn main-slider-three__btn">
											Invest Now
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="main-slider__nav">
				<div class="swiper-button-prev" id="main-slider__swiper-button-next">
					<i class="icon-right-arrow icon-left-arrow"></i>
				</div>
				<div class="swiper-button-next" id="main-slider__swiper-button-prev">
					<i class="icon-right-arrow"></i>
				</div>
			</div>
		</div>
    </section>
    <!--Main Slider End-->
	<!--Real World Start-->
	<section class="real-world">
		<div class="container">
			<div class="row">
				<div class="col-xl-4">
					<div class="real-world__left">
						<div class="section-title text-left">
							<span class="section-title__tagline">
								Investing in a better future
							</span>
							<h2 class="section-title__title">
								We offer strong financial returns
							</h2>
						</div>
						<p class="real-world__left-text">
							We maximise the social and financial impact of every 
							investment we make by focussing on innovative companies.
						</p>
						<p>
							We offer exceptional financial guidance tailored to international 
							investors' unique needs, working collaboratively with you, listening 
							to your needs and aspirations.
						</p>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="real-world__middle">
						<div class="real-world__img">
						    
							<img src="public/images/vev_home.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="real-world__counter-box">
						<ul class="list-unstyled real-world__counter">
					@foreach($plans as $plan)
<li class="real-world__counter-single">
    <div class="real-world__counter-content">
        <h4 class="real-world__counter-title">{{ $plan->name }}</h4> <!-- Plan Name Added -->
        <span class="odometer" data-count="{{ $plan->increment_amount }}">0</span>
        <span class='cent'>%</span>
        <p class="real-world__counter-text">Profit {{ $plan->increment_interval }} for {{ $plan->expiration }}</p>
    </div>
    <div class="real-world__counter-icon">
        @if($plan->id % 2 == 0)
            <span class="icon-help"></span>
        @else
            <span class="icon-customer-review"></span>
        @endif
    </div>
</li>
@endforeach


</ul>					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Real World End-->

	<!--We Improve Start-->
	<section class="we-improve clearfix">
		<div class="we-improve-bg" style="background-image: url(public/images/vev_home_bg.jpg)"></div>
		<div class="container">
			<div class="we-improve__inner">
				<div class="section-title text-left">
					<span class="section-title__tagline">Investing for impact &amp; return.</span>
					<h2 class="section-title__title">
						Truly independent investment solution for new and expat investors
					</h2>
				</div>
				<p class="we-improve__text">
					We offer our investors the comfort to invest with us with huge profit expectation.
					Our investment process is guided by a comprehensive set of policies and position 
					statements, We have been able to time the market very well and the team has 
					proved to be good at asset selection for our clients.
				</p>
				<div class="we-improve__funded">
					<div class="we-improve__funded-img">
						<img src="public/images/vev_home_img.jpg" alt="">
					</div>
					<p class="we-improve__funded-content">At {{$settings->site_name}}, you can find an investment plan to suit every
						<span>need.</span></p>
				</div>
				<ul class="list-unstyled we-improve__points">
					<li>
						<div class="icon">
							<i class="fa fa-check"></i>
						</div>
						<div class="text">
							<p><a href='login'>Account login</a></p>
						</div>
					</li>
					<li>
						<div class="icon">
							<i class="fa fa-check"></i>
						</div>
						<div class="text">
							<p><a href='register'>Create new account</a></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!--We Improve End-->

	<!--Contact One Start-->
	<section class="contact-one">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<div class="contact-one__left">
						<div class="section-title text-left">
							<span class="section-title__tagline">
								Provider of specialist investment capabilities
							</span>
							<h2 class="section-title__title">
								Investing can be a great way to help grow your money.
							</h2>
						</div>

						<p class="contact-one__text">
							All our investment teams - whether in-house or individually branded - 
							operate with discrete investment autonomy, according to their investment 
							philosophies. Active investor retention and development by our team 
							focussing on high quality investors.
						</p>
						
						<h2 class="contact-one__founder">
							James M. Batista<span>- Co Founder</span>
						</h2>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="contact-one__right">
						<div class="contact-one__form-box">
							<div class='row'>
								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/usdc.png" alt="">
								</div>

								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/usdt.png" alt="">
								</div>

								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/ltc.png" alt="">
								</div>
							</div>

							<div class='row'>
								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/btc.png" alt="">
								</div>

								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/dash.png" alt="">
								</div>

								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/bch.png" alt="">
								</div>
							</div>

							<div class='row'>
								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/eth.png" alt="">
								</div>

								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/doge.png" alt="">
							
								</div>

								<div class='col-md-4 text-center'>
								<img class='processor' src="public/images/brand/trx.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact One End-->
		

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__top">
	<div class="row">
		<div class="col-xl-5 col-lg-5 wow fadeInUp" data-wow-delay="100ms">
			<div class="site-footer__top-left">
				<div class="site-footer__top-logo-content">
					<a href="/">
						<img src="{{ asset('storage/app/public/'.$settings->logo)}}" width="146" alt="">
					</a>
					<p class="site-footer__top-text">
						Our commitment to high-quality investment returns, ensures our clients can 
						make valuable returns in a rapidly evolving business environment.
					</p>
				</div>
				<div class="site-footer__top-newsletter">
					<h5 class="site-footer__top-newsletter-title">
						Contact us for investment products and services
					</h5>
					<form method='POST' action='https://vevrecapital.net/contact-us' class="site-footer__top-newsletter-form">
						<div class="site-footer__top-newsletter-input-box">
							<input type="email" placeholder="Email Address" name="email">
							<button type="submit" class="site-footer__top-newsletter-btn">Go</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xl-7 col-lg-7">
			<div class="site-footer__top-right">
				<div class="site-footer__top-widget-box">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="100ms">
							<div class="footer-widget__column footer-widget__explore clearfix">
								<h3 class="footer-widget__title">Explore</h3>
								<ul class="footer-widget__explore-list list-unstyled clearfix">
									<li><a href="/">Home</a></li>
									<li><a href="about">About</a></li>
									<li><a href="faq">F.A.Q</a></li>
									<li><a href="register">Create Account</a></li>
									<li><a href="login">Account Login</a></li>
								
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="200ms">
							<div class="footer-widget__column footer-widget__links clearfix">
								<h3 class="footer-widget__title">Links</h3>
								<ul class="footer-widget__links-list list-unstyled clearfix">
									<li><a href="terms">Privacy Policy</a></li>
									<li><a href="terms">Terms Of Service</a></li>
									<!-- <li><a href="rate-us">Operation Ratings</a></li> -->
									<li><a href="contact">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-4 wow fadeInUp" data-wow-delay="300ms">
							<div class="footer-widget__column footer-widget__contact clearfix">
								<h3 class="footer-widget__title">Contact</h3>
								<a href="cdn-cgi/l/email-protection.html#f8969d9d9c909d9488b89b979588999681d69b9795"><span class="__cf_email__" data-cfemail="0e7d7b7e7e617c7a4e786b787c6b6d6f7e677a6f6220606b7a">[email&#160;protected]</span></a>
								<p class="footer-widget__contact-text">
									{{$settings->address_o}}
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="site-footer__top-contact-details wow fadeInUp" data-wow-delay="400ms">
					

					<div class="site-footer__top-right-social">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					
					<div class="site-footer__top-right-phone">
						<p class="site-footer__top-right-phone-tagline">Call Anytime</p>
						
						
						
						 @if(empty($settings->whatsapp))
    <i class="fa fa-phone-alt"></i>
                   <a href="#"><i class="fa fa-phone-alt"></i> VIP-MEMBERS-ONLY</a>
@else
 

<a href="#"><i class="fa fa-phone-alt"></i> {{ $settings->whatsapp }}</a>
   
@endif
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>				
                <div class="site-footer__bottom">
                    <p class="site-footer__bottom-text">&copy; 2025 Copyrights all right reserved. <a href="/">{{$settings->site_name}}</a>
					</p>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->
    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler">
				<i class="fa fa-times"></i>
			</span>

            <div class="logo-box">
                <a href="/" aria-label="logo image">
					<img src="{{ asset('storage/app/public/'.$settings->logo)}}" width="155" alt="" />
				</a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="cdn-cgi/l/email-protection.html#6f060109002f190a191d0a0c0e1f061b0e0341010a1b"><span class="__cf_email__" data-cfemail="6900070f06291f0c1f1b0c0a0819001d080547070c1d">[email&#160;protected]</span></a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="#">{{$settings->whatsapp}}</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="public/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="public/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/vendors/jarallax/jarallax.min.js"></script>
    <script src="public/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="public/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="public/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="public/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="public/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="public/vendors/nouislider/nouislider.min.js"></script>
    <script src="public/vendors/odometer/odometer.min.js"></script>
    <script src="public/vendors/swiper/swiper.min.js"></script>
    <script src="public/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="public/vendors/wnumb/wNumb.min.js"></script>
    <script src="public/vendors/wow/wow.js"></script>
    <script src="public/vendors/isotope/isotope.js"></script>
    <script src="public/vendors/countdown/countdown.min.js"></script>
    <script src="public/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="public/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="public/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="public/vendors/vegas/vegas.min.js"></script>
    <script src="public/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="public/vendors/timepicker/timePicker.js"></script>
    <script src="public/js/conult.js"></script>
@include('layouts.livechat')
</body>


</html>
