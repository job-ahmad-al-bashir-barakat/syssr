@extends('layouts.app')

@section('content')
    <div class="main-wrapper">
        <main class="main-container">
            <div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="img/contact-us/1920x260_1.jpg" data-brk-library="component__breadcrumbs_css">
                <span class="brk-abs-bg-overlay brk-base-bg-gradient-right-100 opacity-90"></span>
                <div class="breadcrumbs__wrapper">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
                                    <h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
                                        {{ trans('app.contact') }}
                                    </h2>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="pt-25 pb-35 position-static position-lg-relative breadcrumbs__subtitle">
                                    <h3 class="brk-white-font-color font__family-montserrat font__weight-medium font__size-18 line__height-21 text-uppercase mb-15">
                                        {{ trans('app.contact_headline') }}
                                    </h3>
                                    <ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
                                        <li>
                                            <a href="#">{{ trans('app.home') }}</a>
                                            <i class="fal fa-chevron-right icon"></i>
                                        </li>
                                        <li class="active">{{ trans('app.contact') }}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="pt-80 pb-25">
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
            <section class="position-relative pt-lg-160 pt-80 pb-80 wow fadeInUp">
                    <span class="brk-svg-pattern-container brk-svg-pattern-container-24 brk-svg-pattern-container_top" data-brk-library="component__svg_pattern">
                        <svg viewBox="0 0 1922 150">
                            <defs>
                                <path id="path-id-24-1" d="M1921 873.998v-150H-1z" />
                            </defs>
                            <g>
                                <g transform="translate(1 -724)">
                                    <use fill="#fff" xlink:href="#path-id-24-1" />
                                </g>
                            </g>
                        </svg>
                    </span>
                <div class="brk-abs-overlay brk-base-bg-gradient--30deg"></div>
                <div class="container">
                    <h2 class="font__family-montserrat font__weight-bold font__size-56 line__height-60 brk-white-font-color mb-80 text-center wow fadeInUp">{{ trans('app.short_faq') }}</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="wow fadeInLeft">
                                <div class="pl-20 pr-20">
                                    <div class="mb-60" data-brk-library="component__accordions">
                                        <div class="accordion accordion-simple accordion-simple-scale" role="tablist" aria-multiselectable="true">
                                            <div class="card expanded">
                                                <div class="card-header card-header-sm text-center" role="tab" id="headingOne6">
                                                    <h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 position-relative">
                                                        <span class="arrow"></span>
                                                        <a data-toggle="collapse" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">Put a plan into action
                                                        </a>
                                                    </h5>
                                                    <a class="card-toggle-icon brk-base-font-color" data-toggle="collapse" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                                                        <i class="fab fa-delicious"></i>
                                                    </a>
                                                </div>
                                                <div id="collapseOne6" class="collapse show" role="tabpanel" aria-labelledby="headingOne6">
                                                    <div class="card-block text-center font__family-open-sans bg-position_bottom-right bg-norepeat">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <img class="mb-20 rounded-circle lazyload" alt="alt" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/accordion-bg-image-02.jpg">
                                                                <p class="mt-1 font__family-open-sans letter-spacing-40 font__size-16 line__height-26">
                                                                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header card-header-sm text-center" role="tab" id="headingTwo6">
                                                    <h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 position-relative">
                                                        <span class="arrow"></span>
                                                        <a data-toggle="collapse" href="#collapseTwo6" aria-expanded="true" aria-controls="collapseTwo6">Achieve the target
                                                        </a>
                                                    </h5>
                                                    <a class="card-toggle-icon brk-base-font-color" data-toggle="collapse" href="#collapseTwo6" aria-expanded="true" aria-controls="collapseTwo6">
                                                        <i class="far fa-gem"></i>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo6" class="collapse" role="tabpanel" aria-labelledby="headingTwo6">
                                                    <div class="card-block text-center font__family-open-sans bg-cover">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="mt-1 font__family-open-sans font__size-16">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                                                                    massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                                                                </p>
                                                                <p class="mt-30 font__family-open-sans font__size-16">
                                                                    Nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                                                    consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header card-header-sm text-center" role="tab" id="headingThree6">
                                                    <h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 position-relative">
                                                        <span class="arrow"></span>
                                                        <a data-toggle="collapse" href="#collapseThree6" aria-expanded="true" aria-controls="collapseThree6">Stay on budget
                                                        </a>
                                                    </h5>
                                                    <a class="card-toggle-icon brk-base-font-color" data-toggle="collapse" href="#collapseThree6" aria-expanded="true" aria-controls="collapseThree6">
                                                        <i class="fab fa-gg"></i>
                                                    </a>
                                                </div>
                                                <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6">
                                                    <div class="card-block text-center font__family-open-sans bg-cover">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="mt-1 font__family-open-sans font__size-16">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                                                                    massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                                                                </p>
                                                                <p class="mt-30 font__family-open-sans font__size-16">
                                                                    Nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                                                    consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header card-header-sm text-center" role="tab" id="headingFour6">
                                                    <h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 position-relative">
                                                        <span class="arrow"></span>
                                                        <a data-toggle="collapse" href="#collapseFour6" aria-expanded="true" aria-controls="collapseFour6">Wrap up the project
                                                        </a>
                                                    </h5>
                                                    <a class="card-toggle-icon brk-base-font-color" data-toggle="collapse" href="#collapseFour6" aria-expanded="true" aria-controls="collapseFour6">
                                                        <i class="fas fa-cube"></i>
                                                    </a>
                                                </div>
                                                <div id="collapseFour6" class="collapse" role="tabpanel" aria-labelledby="headingFour6">
                                                    <div class="card-block text-center font__family-open-sans bg-cover">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="mt-1 font__family-open-sans font__size-16">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                                                                    massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                                                                </p>
                                                                <p class="mt-30 font__family-open-sans font__size-16">
                                                                    Nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                                                    consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
