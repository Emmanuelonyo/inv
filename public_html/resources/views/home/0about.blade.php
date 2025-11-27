@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', 'About Us')


@section('content')



        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
<!--Page Header Start-->
<section class="page-header">
	<div class="page-header-bg" style="background-image: url(public/images/page-header-bg.jpg)">
	</div>
	<div class="container">
		<div class="page-header__inner">
			<h2>About us</h2>
			<ul class="thm-breadcrumb list-unstyled">
				<li><a href="/">Home</a></li>
				<li class="active">About</li>
			</ul>
		</div>
	</div>
</section>
<!--Page Header End-->

<!--Get To Know Start-->
<section class="get-to-know">
	<div class="container">
		<div class="row">
			<div class="col-xl-5">
				<div class="get-to-know__left">
					<div class="section-title text-left">
					
						<h2 class="section-title__title">
						Professional investment services.
						</h2>
					</div>

					<p class="get-to-know__text">
                        At our core, we believe in building meaningful, long-term partnerships with our clients. We work hand in hand with every client, ensuring not only value creation but also knowledge transfer that empowers growth and sustainability. Our goal is not just to deliver services, but to become a trusted extension of your team—collaborating with you every step of the way to help turn your vision into reality.

                        Our work philosophy is deeply rooted in transparency, dedication, and a strong work ethic. We take pride in our in-depth understanding of the industries we serve and bring this knowledge to every project we undertake. With a passionate commitment to meeting shared goals and ambitions, we focus on outcomes that truly matter.
                        
                        We believe that success is built on trust, collaboration, and a relentless pursuit of excellence. That’s why we go beyond expectations, ensuring that every solution we deliver creates lasting impact. Our strategy is to identify and invest in high-potential opportunities that align with our values and those of our clients—businesses that are not only poised for growth but also offer outstanding returns.
                        
                        Ultimately, we are driven by purpose and powered by people. Whether you're just starting out or scaling to new heights, we are here to support your journey with insight, innovation, and integrity.
					</p>

					
				</div>
			</div>
			<div class="col-xl-7">
				<div class="get-to-know__right">
					<ul class="get-to-know__images list-unstyled">
						<li>
							<div class="get-to-know__img-1">
								<img src="public/images/vev_about.jpg" alt="">
							</div>
						</li>
						<li>
							<div class="get-to-know__img-2">
								<img src="public/images/vev_about2.jpg" alt="">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Get To Know End-->

@endsection