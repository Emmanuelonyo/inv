<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Online Investment, Cryptocurrencies, Crypto Investment, Deposit, Investment, Earn profit" />
    <title>{{$settings->site_name}} || Investment solutions designed with elegance and finesse</title>
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
        <header class="main-header clearfix">
            <div class="main-header__top clearfix">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>	{{$settings->address_o}}</p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="main-header__top-right">
					<ul class="list-unstyled main-header__top-address">
                            
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>
										<a href="cdn-cgi/l/email-protection.html#a6cfc8c0c9e6d0c3d0d4c3c5c7d6cfd2c7ca88c8c3d2">
											<span class="__cf_email__" data-cfemail="bcd5d2dad3fccad9caced9dfddccd5c8ddd092d2d9c8">[email&#160;protected]</span>										</a>
									</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="/"><img src="{{ asset('storage/app/public/'.$settings->logo)}}" width="176" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
								<li><a href="/">Home</a></li>
								<li><a href="about">About</a></li>
								<li><a href="faq">F.A.Q</a></li>
								<li><a href="terms">Terms</a></li>
								<li><a href="register">Register</a></li>
								<li><a href="login">Login</a></li>
								<li><a href="contact">Support</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>Call Anytime</p>
                               @if(empty($settings->whatsapp))
    <h5><a href="#">VIP-MEMBERS-ONLY</a></h5>
@else
    <h5><a href="https://wa.me/{{ $settings->whatsapp }}" target="_blank">{{ $settings->whatsapp }}</a></h5>
@endif

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
         @yield('content')
         
         
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
					<form method='POST' action='' class="site-footer__top-newsletter-form">
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
								<a href="cdn-cgi/l/email-protection#e9878c8c8d818c8599a98a868499888790c78a8684"><span class="__cf_email__" data-cfemail="ee9d9b9e9e819c9aae988b989c8b8d8f9e879a8f82c0808b9a">[email&#160;protected]</span></a>
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
   	<a href="#"><i class="fa fa-phone-alt"></i> VIP-MEMBERS-ONLY</a>
@else


	<a href="#"><i class="fa fa-phone-alt"></i>{{ $settings->whatsapp }}</a>
   
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
                    <a href="cdn-cgi/l/email-protection.html#dbb2b5bdb49badbeada9beb8baabb2afbab7f5b5beaf"><span class="__cf_email__" data-cfemail="c4adaaa2ab84b2a1b2b6a1a7a5b4adb0a5a8eaaaa1b0">[email&#160;protected]</span></a>
                </li>
                <li>
                     @if(empty($settings->whatsapp))
    <i class="fa fa-phone-alt"></i>
                    <a href="#">VIP-MEMBERS-ONLY</a>
@else
 <i class="fa fa-phone-alt"></i>
                    <a href="#">{{ $settings->whatsapp }}</a>


   
@endif
                    
                    
                   
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
