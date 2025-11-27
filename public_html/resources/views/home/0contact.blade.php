@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')

@section('title', 'Contact us')

@inject('content', 'App\Http\Controllers\FrontController')
@section('content')



        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(public/images/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Details Start-->
        <section class="contact-page-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page-details__left">
                        	
							<div class="contact-page">
								<div class="container">
									<div class="section-title text-center">
										<span class="section-title__tagline">Contact with us</span>
										<h2 class="section-title__title">Drop us a Message</h2>
										
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="contact-page__form">
									<form action="{{route('enquiry')}}" method="POST" class="comment-one__form" id="contactForm" novalidate="novalidate">
                                        @csrf
													<div class="row">
														<div class="col-xl-6">
															<div class="comment-form__input-box">
																<input type="text" placeholder="Your Name" name="name">
															</div>
														</div>

														<div class="col-xl-6">
															<div class="comment-form__input-box">
																<input type="email" placeholder="Email Address" name="email">
															</div>
														</div>

														<div class="col-xl-6">
															<div class="comment-form__input-box">
																<input type="text" placeholder="Phone Number" name="phone">
															</div>
														</div>

														<div class="col-xl-6">
															<div class="comment-form__input-box">
																<input type="text" placeholder="Subject" name="subject">
															</div>
														</div>

														<div class="col-xl-12">
															<div class="comment-form__input-box">
																<textarea name="message" placeholder="Write a Message"></textarea>
															</div>
														</div>

														<!--<div class="col-xl-5">-->
														<!--	<label for="captcha">Please Enter the Captcha Text</label><br />-->
														<!--	<input type='hidden' name='captchaToken' id='captchaToken' value='838712413690e971fed56e97d41513460d6551ad' />-->
														<!--	<img src="secure/838712413690e971fed56e97d41513460d6551ad.png" alt="CAPTCHA" class="captcha-image">-->
														<!--	<i class="fas fa-redo refresh-captcha"  aria-hidden="true"></i><br />-->
														<!--</div>-->
													
														<div class="col-xl-7">
															<br />
															<!--<div class="comment-form__input-box">-->
															<!--	<input type="text" id="captcha" name="botCheck" />-->
															<!--</div>-->
														</div>
													</div>

													<div class="row">
														<div class="col-xl-12 text-left">
															<button type="submit" name='contactNow' class="thm-btn comment-form__btn">send a message</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--contact Page End-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page-details__right">
                            <ul class="list-unstyled contact-page-details__list">
                                <li>



                                    <span>Call Anytime</span>
                                    @if(empty($settings->whatsapp))
                                    <p><a href="#">VIP-MEMBERS-ONLY</a></p>
                                    @else
                                    <p><a href="#">{{$settings->whatsapp}}</a></p>
                                    @endif
                                </li>
                                <li>
                                    <span>Send Email</span>
                                    <p><a href="cdn-cgi/l/email-protection.html#acc2c9c9c8c4c9c0dceccfc3c1dccdc2d582cfc3c1"><span class="__cf_email__" data-cfemail="5831363e37182e3d2e2a3d3b3928312c393476363d2c">[email&#160;protected]</span></a></p>
                                </li>
                                <li>
                                    <span>Visit Office</span>
                                    <p>	{{$settings->address_o}}</p>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page Details End-->

      
    



@endsection