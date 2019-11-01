@extends('layouts.app')

@section('content')
    @include('partials._breadcrumbs',['title' => trans('app.contact')])
    <div class="main-wrapper">
        <main class="main-container">
            <section class="pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="#" class="brk-subscribe-mail brk-subscribe-mail_dark brk-form-strict pt-15 wow fadeInLeft" data-brk-library="component__form">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input type="text" name="full_name" placeholder="{{ trans('app.your_name') }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="text" name="email" placeholder="{{ trans('app.your_mail') }}">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="bordered-bottom" placeholder="{{ trans('app.your_question') }}" style="min-height: 110px;"></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-inside-out btn-lg btn-icon border-radius-30 mt-25 btn-shadow" data-brk-library="component__button">
                                        <i class="fas fa-envelope icon-inside"></i>
                                        <span class="before">{{ trans('app.send_message') }}</span><span class="text">{{ trans('app.send_message') }}</span><span class="after">{{ trans('app.send_message') }}</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <div class="wow fadeInRight">
                                <h1 class="font__family-montserrat font__size-56 line__height-60 font__weight-thin mb-30">
                                    {{ trans('app.need_help') }} <br>
                                    <span class="font__weight-bold">{{ trans('app.contact') }}</span>
                                </h1>
                                <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                                    <i class="brk-footer-icon text-middle fa fa-envelope line__height-24 brk-base-font-color"></i>
                                    <a href="mailto:info@domain.com" class="show-inline-block">info@domain.com</a>
                                </p>
                                <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                                    <i class="brk-footer-icon text-middle fas fa-map-marker-alt line__height-24 brk-base-font-color"></i>
                                    <span>Chicago, USA</span>
                                </p>
                                <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                                    <i class="brk-footer-icon text-middle fa fa-phone line__height-24 brk-base-font-color"></i>
                                    <a href="#" class="show-inline-block">800 12 34 567</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="brk-map" data-height="520" data-brk-library="component__map">
                    <div class="brk-map__section">
                        <div class="brk-map__canvas" data-address="412 Throop Ave, Brooklyn, NY 11221, USA" data-zoom="13" data-type="roadmap" data-marker="img/gm-1.png" data-offset-lat="0.0047" data-style="silver" data-lat="40.6898297" data-lng="-73.94250620000003">
                        </div>
                    </div>
                    <div class="brk-map__infoicon brk-map__infoicon_layout-one text-center pt-80">
                        <h4 class="font__family-montserrat font__weight-bold font__size-21 line__height-22">Chicago, USA</h4>
                        <div class="brk-map__infoicon--text">
                            <ul class="font__size-15 line__height-21">
                                <li class="brk-dark-font-color">
                                    <i class="fas fa-phone brk-base-font-color font__size-13"></i>
                                    <a href="tel:8800123456789">8 800 123 456 789</a>
                                </li>
                                <li class="brk-dark-font-color">
                                    <i class="far fa-clock brk-base-font-color font__size-13"></i>
                                    <span>Mon - Sat 8:00 - 18:00<br>Sunday CLOSED</span>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="btn border-radius-25 font__family-open-sans font__weight-bold btn-inside-out" data-brk-library="component__button">
                            <span class="before">{{ trans('app.directions') }}</span>
                            <span class="text">{{ trans('app.directions') }}</span>
                            <span class="after">{{ trans('app.directions') }}</span>
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection

@section('footer')
    <footer class="brk-footer brk-footer-1 position-relative" data-brk-library="component__footer,twitter_init">
        <div class="brk-footer__wrapper brk-footer__wrapper_shadow">
            <div class="pt-60 brk-light-gradient-90deg-94 border-bottom-3 brk-border-color-light brk-shadow-light">
                <div class="container">
                    <div class="brk-dashed-logo mb-20">
                        <span class="brk-dashed-logo__line"></span>
                        <a class="brk-dashed-logo__link ml-25 mr-25">
                            <img src="{{ asset('custom/logo_icon/logo.png') }}" height="31" width="170" alt="logo" style="filter: brightness(0) invert(1)">
                        </a>
                        <span class="brk-dashed-logo__line"></span>
                    </div>
                    <div class="brk-social-links brk-white-font-color brk-social-links_opacity d-flex justify-content-center mb-40 font__size-12" data-brk-library="component__social_links">
                        <a href="#" class="brk-social-links__item">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="brk-social-links__item">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="brk-footer__rights pt-15 pb-20 text-center">
                        <p class="font__family-open-sans font__size-14 font__weight-normal line__height-14">© {{ date('Y') }} {!! trans('app.copyright') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
