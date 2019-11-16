@section('footer')
    <footer class="brk-footer position-relative" data-brk-library="component__footer">
        <div class="brk-footer__wrapper pt-sm-70 pt-40">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('img/syssr/footer-banner.jpg')}}" alt="alt" class="brk-abs-img lazyload">
            <span class="brk-abs-overlay brk-base-gradient-34"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 order-sm-1 order-2">
                        <h6 class="brk-white-font-color font__family-montserrat font__size-36 font__weight-bold line__height-36 mb-50 text-center text-sm-left">{{ trans('app.our_info') }}</h6>
                        <p class="font__family-open-sans font__size-14 line__height-16 mb-15 brk-white-font-color opacity-50 text-center text-sm-left">{{ trans('app.our_info_message') }}</p>
                        @if(!empty($default_contact->mobile_1))
                        <p class="font__size-36 text-center text-sm-left">
                            <a href="tel:{{$default_contact->mobile_1}}" class="brk-white-font-color font__family-open-sans font__weight-light line__height-36">{{$default_contact->mobile_1}}</a>
                        </p>
                        <hr class="horiz-line mt-35 mb-40">
                        @endif
                        @if(!empty($default_contact->contact_email))
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-10 brk-white-font-color text-center text-sm-left">
                            <i class="brk-footer-icon text-middle fa fa-envelope line__height-24"></i>
                            <a href="mailto:{{$default_contact->contact_email}}" class="show-inline-block">{{$default_contact->contact_email}}</a>
                        </p>
                        @endif
                        @if(!empty($default_contact->address))
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-40 mb-sm-10 brk-white-font-color text-center text-sm-left">
                            <i class="brk-footer-icon text-middle fa fa-map-marker line__height-24"></i>
                            <span>{{$default_contact->address->$lang}}</span>
                        </p>
                        @endif
                    </div>
                    <div class="col-12 col-sm-6 col-lg-8 order-sm-2 order-1">
                        <h6 class="brk-white-font-color font__family-montserrat font__size-36 font__weight-bold line__height-36 text-center text-sm-left pt-xs-20">{{ trans('app.contact') }}</h6>
                        <form action="#" class="brk-subscribe-mail brk-form-strict brk-form-strict_footer-3 mb-90" data-brk-library="component__form">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" placeholder="{{ trans('app.your_name') }}" name="full_name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" placeholder="{{ trans('app.your_mail') }}" name="email">
                                </div>
                                <div class="col-12">
                                    <textarea id="footer3" name="message" cols="30" rows="5" placeholder="{{ trans('app.your_question') }}" class="bordered-bottom"></textarea>
                                </div>
                                <button type="submit" class="d-flex align-items-center justify-content-center font__size-12 brk-white-font-color brk-base-bg-6">
                                    <i class="fal fa-envelope mr-15 font__size-14"></i>
                                    <span class="font__family-montserrat font__size-14 text-uppercase letter-spacing-60">{{ trans('app.send_message') }}</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="brk-base-bg-6">
                <div class="container">
                    <div class="d-flex justify-content-sm-between justify-content-center align-items-center flex-lg-row flex-column flex-wrap pt-20 pb-15">
                        <p class="brk-white-font-color font__size-14">© {{ date('Y') }} {!! trans('app.copyright') !!}</p>
                        <div class="brk-social-links brk-white-font-color font__size-12" data-brk-library="component__social_links">
                            @if(!empty($default_contact->facebook))
                                <a href="{{$default_contact->facebook}}" target="_blank" class="brk-social-links__item">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                            @endif
                            @if(!empty($default_contact->linkedin))
                                <a href="{{$default_contact->linkedin}}" target="_blank" class="brk-social-links__item">
                                    <i class="fab fa-linkedin fa-2x"></i>
                                </a>
                            @endif
                            @if(!empty($default_contact->twitter))
                                <a href="{{$default_contact->twitter}}" target="_blank" class="brk-social-links__item">
                                    <i class="fab fa-twitter fa-2x"></i>
                                </a>
                            @endif
                            @if(!empty($default_contact->google_plus))
                                <a href="{{$default_contact->google_plus}}" target="_blank" class="brk-social-links__item">
                                    <i class="fab fa-google-plus-g fa-2x"></i>
                                </a>
                            @endif
                            @if(!empty($default_contact->youtube))
                                <a href="{{$default_contact->youtube}}" target="_blank" class="brk-social-links__item">
                                    <i class="fab fa-youtube fa-2x"></i>
                                </a>
                            @endif
                            @if(!empty($default_contact->whatsapp))
                                <a href="https://api.whatsapp.com/send?phone={{$default_contact->whatsapp}}" target="_blank" class="brk-social-links__item">
                                    <i class="fab fa-whatsapp fa-2x"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@show
