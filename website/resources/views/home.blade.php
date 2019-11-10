@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel2-2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')
    <div class="wrapper" style="margin-top:72px;">

        <div class="owl-carousel owl-theme shadow-lg">
            <div class="item">
                <img src="{{asset('img/syssr/home_banner_1.jpg')}}" alt="home_banner_1">
            </div>
            <div class="item">
                <img src="{{asset('img/syssr/home_banner_2.jpg')}}" alt="home_banner_2">
            </div>
            <div class="item">
                <img src="{{asset('img/syssr/home_banner_3.jpg')}}" alt="home_banner_3">
            </div>
        </div>

        <section>
            <div class="container">
                <div class="mb-40 mt-80">
                    <div class="text-left">
                        <h3 class="font__family-montserrat font__size-28 font__weight-bold">
                            {{trans('app.latest_projects')}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="mb-100">
                <div class="triple-slider slick-loading arrows-classic" data-brk-library="slider__slick,component__image_caption">
                    <div>
                        <div class="brk-ic-left-slide brk-ic-left-slide__pointer" data-brk-library="component__image_caption_css">
                            <a href="#" class="brk-ic-left-slide__link"></a>
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/shop-home-page/slider-1.jpg" alt="alt" class="brk-ic-left-slide__img lazyload">
                            <div class="brk-ic-left-slide__overlay brk-base-bg-gradient-6-black"></div>
                            <div class="brk-ic-left-slide__wrapper brk-ic-left-slide__wrapper_gradient brk-base-bg-gradient-50deg-a">
                                <h3 class="brk-ic-left-slide__title font__size-21 line__height-28">
                                    <span class="font__family-montserrat font__weight-light">
                                        Network device
                                    </span>
                                    <br>
                                    <span class="font__family-montserrat font__weight-bold letter-spacing--20">
                                        & Personal computer
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="brk-ic-left-slide brk-ic-left-slide__pointer" data-brk-library="component__image_caption_css">
                            <a href="#" class="brk-ic-left-slide__link"></a>
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/shop-home-page/slider-2.jpg" alt="alt" class="brk-ic-left-slide__img lazyload">
                            <div class="brk-ic-left-slide__overlay brk-base-bg-gradient-6-black"></div>
                            <div class="brk-ic-left-slide__wrapper brk-ic-left-slide__wrapper_gradient brk-base-bg-gradient-50deg-a">
                                <h3 class="brk-ic-left-slide__title font__size-21 line__height-28">
                                    <span class="font__family-montserrat font__weight-light">
                                        Wireless device
                                    </span>
                                    <br>
                                    <span class="font__family-montserrat font__weight-bold letter-spacing--20">
                                        & Portable media player
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="brk-ic-left-slide brk-ic-left-slide__pointer" data-brk-library="component__image_caption_css">
                            <a href="#" class="brk-ic-left-slide__link"></a>
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/shop-home-page/slider-3.jpg" alt="alt" class="brk-ic-left-slide__img lazyload">
                            <div class="brk-ic-left-slide__overlay brk-base-bg-gradient-6-black"></div>
                            <div class="brk-ic-left-slide__wrapper brk-ic-left-slide__wrapper_gradient brk-base-bg-gradient-50deg-a">
                                <h3 class="brk-ic-left-slide__title font__size-21 line__height-28">
                                    <span class="font__family-montserrat font__weight-light">
                                        Car audio
                                    </span>
                                    <br>
                                    <span class="font__family-montserrat font__weight-bold letter-spacing--20">
                                        & Display device
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="brk-ic-left-slide brk-ic-left-slide__pointer" data-brk-library="component__image_caption_css">
                            <a href="#" class="brk-ic-left-slide__link"></a>
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/570x400_3.jpg" alt="alt" class="brk-ic-left-slide__img lazyload">
                            <div class="brk-ic-left-slide__overlay brk-base-bg-gradient-6-black"></div>
                            <div class="brk-ic-left-slide__wrapper brk-ic-left-slide__wrapper_gradient brk-base-bg-gradient-50deg-a">
                                <h3 class="brk-ic-left-slide__title font__size-21 line__height-28">
                                    <span class="font__family-montserrat font__weight-light">
                                        Network device
                                    </span>
                                    <br>
                                    <span class="font__family-montserrat font__weight-bold letter-spacing--20">
                                        & Personal computer
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mb-20">
                <div class="text-left">
                    <h3 class="font__family-montserrat font__size-28 font__weight-bold">
                        {{trans('app.latest_news')}}
                    </h3>
                </div>
            </div>
            <div class="container mb-20">
                <div class="default-slider slick-loading arrows-classic-dark-square fa-req" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows": true, "responsive": [
                        {"breakpoint": 992, "settings": {"slidesToShow": 3}},
                        {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                        {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                        ]}' data-brk-library="slider__slick">
                    <div class="pl-15 pr-15">
                        <div class="post-sqaure" style="background-image: url(img/263x409_1.jpg)" data-brk-library="component__content_slider">
                            <h3 class="post-sqaure__title font__family-oxygen font__weight-light font__size-21 line__height-26">7 Signs
                                Your Website is Boring</h3>
                            <button class="post-sqaure__btn btn btn-md-1 border-radius-0 font__family-montserrat font__weight-light btn-inside-out letter-spacing--100" data-brk-library="component__button">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </button>
                        </div>
                    </div>
                    <div class="pl-15 pr-15">
                        <div class="post-sqaure" style="background-image: url(img/263x409_2.jpg)" data-brk-library="component__content_slider">
                            <h3 class="post-sqaure__title font__family-oxygen font__weight-light font__size-21 line__height-26">Why
                                Creators Are Turning</h3>
                            <button class="post-sqaure__btn btn btn-md-1 border-radius-0 font__family-montserrat font__weight-light btn-inside-out letter-spacing--100" data-brk-library="component__button">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </button>
                        </div>
                    </div>
                    <div class="pl-15 pr-15">
                        <div class="post-sqaure" style="background-image: url(img/263x409_3.jpg)" data-brk-library="component__content_slider">
                            <h3 class="post-sqaure__title font__family-oxygen font__weight-light font__size-21 line__height-26">Aquatic:
                                Stock Photography</h3>
                            <button class="post-sqaure__btn btn btn-md-1 border-radius-0 font__family-montserrat font__weight-light btn-inside-out letter-spacing--100" data-brk-library="component__button">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </button>
                        </div>
                    </div>
                    <div class="pl-15 pr-15">
                        <div class="post-sqaure" style="background-image: url(img/263x409_4.jpg)" data-brk-library="component__content_slider">
                            <h3 class="post-sqaure__title font__family-oxygen font__weight-light font__size-21 line__height-26">Some news
                                title goes here</h3>
                            <button class="post-sqaure__btn btn btn-md-1 border-radius-0 font__family-montserrat font__weight-light btn-inside-out letter-spacing--100" data-brk-library="component__button">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </button>
                        </div>
                    </div>
                    <div class="pl-15 pr-15">
                        <div class="post-sqaure" style="background-image: url(img/263x409_2.jpg)" data-brk-library="component__content_slider">
                            <h3 class="post-sqaure__title font__family-oxygen font__weight-light font__size-21 line__height-26">Some news
                                title goes here</h3>
                            <button class="post-sqaure__btn btn btn-md-1 border-radius-0 font__family-montserrat font__weight-light btn-inside-out letter-spacing--100" data-brk-library="component__button">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="mt-40 mt-md-170">
				<div class="brk-paraxify overflow-hid mt-70 mt-md-140" style="background-image: url({{asset('img/syssr/home_bg_1.jpg')}})" data-brk-library="component__parallax">
					<div class="container">
						<div class="row scroll-show circle__wrap content__side-left">
							<span class="parallax__bg-shape-lg brk-parallax__bg-color"></span>
							<div class="col-md-5">
								<div class="pt-110 pb-110 text-center">
									<h5 class="font__family-montserrat highlight-trend">We are Awesome</h5>
									<h2 class="font__family-montserrat font__weight-bold font__size-36 line__height-42 mt-20 letter__spacing--100">
										ENGAGING, PURPOSEFUL,</h2>
									<h2 class="font__family-playfair font__style-italic font__weight-normal font__size-36 line__height-42">&
										Creative</h2>
									<div class="divider-cross wow zoomIn">
										<span></span>
										<span></span>
									</div>
									<h5 class="font__family-playfair font__size-15 text-gray-light line__height-22 letter-spacing-20">Vestibulum
										fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor
										sed cursus feugiat, nunc augue blandit nunc.</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="brk-paraxify overflow-hid mt-30" style="background-image: url({{asset('img/syssr/home_bg_1.jpg')}})" data-brk-library="component__parallax">
					<div class="container">
						<div class="row scroll-show circle__wrap content__side-right">
							<span class="parallax__bg-shape-lg brk-parallax__bg-gradient"></span>
							<div class="col-md-7"></div>
							<div class="col-md-5">
								<div class="all-light text-md-left text-center pt-90 pb-90">
									<p class="font__family-open-sans font__weight-light font__size-16 brk-white-font-color opacity-60 letter-spacing-60">
										WE ARE
										AWESOME</p>
									<h2 class="font__family-montserrat-alt font__weight-medium font__size-56 line__height-50">
										<span class="show-inline-block text-middle">We are</span>
										<span class="font__family-playfair font__weight-light font__style-italic">creative</span>
									</h2>
									<p class="font__family-open-sans font__size-16 brk-white-font-color opacity-60 mt-30 line__height-26">Lorem
										ipsum dolor sit
										amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
										penatibus et magnis dis parturient montes</p>
									<a href="#" class="btn btn-prime btn-lg border-radius-25 font__weight-bold btn-prime-white ml-0 mr-0 mt-50 btn-min-width-200" data-brk-library="component__button">
										<span class="before"></span><span class="after"></span><span class="border-btn"></span>Read More
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>

        <section>
            <div class="mt-40 mt-md-170">
				<div class="container">
					<h3 class="font__family-montserrat font__size-28 font__weight-bold text-left"></h3>
				</div>
				<div class="brk-paraxify overflow-hid mt-30" style="background-image: url({{asset('img/syssr/home_bg_2.jpg')}})" data-brk-library="component__parallax">
					<div class="container">
						<div class="row wing__wrap scroll-show content__side-right">
							<span class="parallax__bg-shape-lg brk-parallax__bg-gradient-md">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 790 170" xml:space="preserve" preserveAspectRatio="none" fill="url(#gradient)">
									<defs>
										<linearGradient id="gradient" x1="0" y1="0" x2="1" y2="0">
											<stop offset="0%" stop-color="var(--brand-primary)" />
											<stop offset="100%" stop-color="var(--secondary)" />
										</linearGradient>
									</defs>
									<path d="M0,0H793.7V170.08H0ZM0,170.08c149.56-4.21,259.59-9.69,289-12.72,7.7-.79,22.53-2.73,36.59-13.55,12.29-9.47,18.34-21.39,21.73-28.26C369.3,71.05,392.65,10.86,396.85,0H0Z" />
								</svg>
							</span>
							<div class="col-md-7"></div>
							<div class="col-md-5">
								<div class="all-light text-left pt-110 pb-110">
									<h2 class="font__family-montserrat-alt font__size-34 font__weight-bold line__height-34 text-uppercase">
										<span class="badge badge-primary font__size-13 font__weight-bold line__height-28 font__family-open-sans">Stay with us!</span>
										Subscribe now
									</h2>
									<form class="subscribe-form mt-20">
										<div class="form-control">
											<input type="email" title="email" placeholder="Your mail">
											<button class="btn" type="submit">
												<i class="fas fa-paper-plane"></i>
											</button>
										</div>
									</form>
									<div class="divider-dashed"></div>
									<p class="line__height-24">Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
										Aenean leo ligula,
										porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra fequis, feugiat
										arutr, tellus. Phasellus viverra nulla ut metus varius laoreet. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>

        <section>
            <div class="container">
                <h3 class="font__family-montserrat font__size-28 font__weight-bold text-left"></h3>
            </div>
			<div class="pt-60 pb-60 pb-lg-0 text-center position-relative" data-brk-library="component__social_block,component__button">
				<img src="{{asset('img/syssr/social-banner.jpg')}}" alt="alt" class="brk-abs-img">
				<span class="brk-abs-overlay brk-black-76-overlay"></span>
				<div class="container all-light">
					<div class="row no-gutters mt-0 mt-lg-70">
                        @if($default_contact->facebook)
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-square social__icon-square_dark">
                                    <a href="{{$default_contact->facebook}}" target="_blank"><i class="brk-icon slide-bg-wrap fab fa-facebook-square"><span class="slide-bg"></span></i></a>
                                    <h4 class="font__family-montserrat font__size-16 text">Facebook</h4>
                                </div>
                            </div>
                        @endif
                        @if($default_contact->linkedin)
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-square social__icon-square_dark">
                                    <a href="{{$default_contact->linkedin}}" target="_blank"><i class="brk-icon slide-bg-wrap fab fa-linkedin"><span class="slide-bg"></span></i></a>
                                    <h4 class="font__family-montserrat font__size-16 text">LinkedIn</h4>
                                </div>
                            </div>
                        @endif
                        @if($default_contact->twitter)
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-square social__icon-square_dark">
                                    <a href="{{$default_contact->twitter}}" target="_blank"><i class="brk-icon slide-bg-wrap fab fa-twitter"><span class="slide-bg"></span></i></a>
                                    <h4 class="font__family-montserrat font__size-16 text">Twitter</h4>
                                </div>
                            </div>
                        @endif
                        @if($default_contact->google_plus)
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-square social__icon-square_dark">
                                    <a href="{{$default_contact->google_plus}}" target="_blank"><i class="brk-icon slide-bg-wrap fab fa-google-plus-g"><span class="slide-bg"></span></i></a>
                                    <h4 class="font__family-montserrat font__size-16 text">Google +</h4>
                                </div>
                            </div>
                        @endif
                        @if($default_contact->youtube)
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-square social__icon-square_dark">
                                    <a href="{{$default_contact->youtube}}" target="_blank"><i class="brk-icon slide-bg-wrap fab fa-youtube"><span class="slide-bg"></span></i></a>
                                    <h4 class="font__family-montserrat font__size-16 text">Youtube</h4>
                                </div>
                            </div>
                        @endif
                        @if($default_contact->whatsapp)
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-square social__icon-square_dark">
                                    <a href="https://api.whatsapp.com/send?phone={{$default_contact->whatsapp}}" target="_blank"><i class="brk-icon slide-bg-wrap fab fa-whatsapp"><span class="slide-bg"></span></i></a>
                                    <h4 class="font__family-montserrat font__size-16 text">WhatsApp</h4>
                                </div>
                            </div>
                        @endif
					</div>
				</div>
			</div>
        </section>

    </div>
@endsection

@section('script')
    <script defer="defer" src="{{ asset('vendor/OwlCarousel2-2.3.4/owl.carousel.min.js') }}"></script>
    <script>
        jQuery(document).ready(function(){
            owl_rtl = false;
            if('{!! $lang !!}'=='ar')
                owl_rtl = true;
            jQuery(".owl-carousel").owlCarousel({
                center: true,
                items:1,
                loop:true,
                rtl:owl_rtl,
                smartSpeed:2000,
                margin: 10,
                autoplay:true,
                autoplayTimeout:10000,
                autoplayHoverPause:true
            });
        });
    </script>
@endsection
