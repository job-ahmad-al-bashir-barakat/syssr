@extends('layouts.shared')

@section('shared')
<div class="main-page">
    @include('layouts._header')
    <div class="wrapper" style="margin-top:72px;">
        @yield('content')
    </div>
    <footer class="brk-footer position-relative" data-brk-library="component__footer">
        <div class="brk-footer__wrapper  @if(Route::currentRouteName() == 'home') pt-sm-70 pt-40 @endif">
            @if(Route::currentRouteName() == 'home')
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1920x430_2.jpg" alt="alt" class="brk-abs-img lazyload">
            <span class="brk-abs-overlay brk-blue-86-overlay"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 order-sm-1 order-2">
                        <h6 class="brk-white-font-color font__family-montserrat font__size-36 font__weight-bold line__height-36 mb-50 text-center text-sm-left">Our Info</h6>
                        <p class="font__family-open-sans font__size-14 line__height-16 mb-15 brk-white-font-color opacity-50 text-center text-sm-left">Call Us or use Contact Form</p>
                        <p class="font__size-36 text-center text-sm-left">
                            <a href="#" class="brk-white-font-color font__family-open-sans font__weight-light line__height-36">8 800 12 34 567</a>
                        </p>
                        <hr class="horiz-line mt-35 mb-40">
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-10 brk-white-font-color text-center text-sm-left">
                            <i class="brk-footer-icon text-middle fa fa-envelope line__height-24"></i>
                            <a href="mailto:info@domain.com" class="show-inline-block">info@domain.com</a>
                        </p>
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-40 mb-sm-10 brk-white-font-color text-center text-sm-left">
                            <i class="brk-footer-icon text-middle fa fa-map-marker line__height-24"></i>
                            <span>Chicago, USA</span>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-8 order-sm-2 order-1">
                        <h6 class="brk-white-font-color font__family-montserrat font__size-36 font__weight-bold line__height-36 text-center text-sm-left pt-xs-20">Contact Us</h6>
                        <form action="#" class="brk-subscribe-mail brk-form-strict brk-form-strict_footer-3 mb-90" data-brk-library="component__form,recaptcha">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" placeholder="Name" name="FNAME">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" placeholder="Email" name="EMAIL">
                                </div>
                                <div class="col-12">
                                    <textarea id="footer3" name="MESSAGE" cols="30" rows="5" placeholder="Your message" class="bordered-bottom"></textarea>
                                </div>
                                <button type="submit" class="d-flex align-items-center justify-content-center font__size-12 brk-white-font-color brk-base-bg-6">
                                    <i class="fal fa-envelope mr-15 font__size-14"></i>
                                    <span class="font__family-montserrat font__size-14 text-uppercase letter-spacing-60">submit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            <div class="brk-base-bg-6">
                <div class="container">
                    <div class="d-flex justify-content-sm-between justify-content-center align-items-center flex-lg-row flex-column flex-wrap pt-20 pb-15">
                        <p class="brk-white-font-color font__size-14">© {{ date('Y') }} {!! trans('app.copyright') !!}</p>
                        <div class="brk-social-links brk-white-font-color font__size-12" data-brk-library="component__social_links">
                            <a href="#" class="brk-social-links__item">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="brk-social-links__item">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
