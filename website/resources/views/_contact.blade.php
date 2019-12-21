<section class="pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="wow fadeInRight">
                    <h1 class="font__family-montserrat font__size-56 line__height-60 font__weight-thin mb-30">
                        <span class="font__weight-bold">{{ trans('app.contact') }}</span>
                    </h1>
                    @if($contact['address'])
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                            <i class="brk-footer-icon text-middle fas fa-map-marker-alt line__height-24 brk-base-font-color"></i>
                            <span>{{$contact['address'][$lang]}}</span>
                        </p>
                    @endif
                    @if($contact['info_email'])
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                            <i class="brk-footer-icon text-middle fa fa-envelope line__height-24 brk-base-font-color"></i>
                            <a href="mailto:{{$contact['info_email']}}" class="show-inline-block">{{$contact['info_email']}}</a>
                        </p>
                    @endif
                    @if($contact['phone'])
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                            <i class="brk-footer-icon text-middle fa fa-phone line__height-24 brk-base-font-color"></i>
                            <a href="tel:{{$contact['phone']}}" class="show-inline-block">{{$contact['phone']}}</a>
                        </p>
                    @endif
                    @if($contact['mobile_1'])
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                            <i class="brk-footer-icon text-middle fa fa-mobile line__height-24 brk-base-font-color"></i>
                            <a href="tel:{{$contact['mobile_1']}}" class="show-inline-block">{{$contact['mobile_1']}}</a>
                        </p>
                    @endif
                    @if($contact['mobile_2'])
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
                            <i class="brk-footer-icon text-middle fa fa-mobile line__height-24 brk-base-font-color"></i>
                            <a href="tel:{{$contact['mobile_2']}}" class="show-inline-block">{{$contact['mobile_2']}}</a>
                        </p>
                    @endif
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <form action="#" class="brk-subscribe-mail brk-subscribe-mail_dark brk-form-strict pt-15 wow fadeInLeft" data-brk-library="component__form">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="subject" placeholder="{{ trans('app.subject') }}">
                        </div>
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
        </div>
    </div>
</section>
@if($contact['lat'] && $contact['lng'])
    <section>
        <div class="brk-map mb-5" data-height="350" data-brk-library="component__map">
            <svg class="brk-map__layer-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 45">
                <path d="M1920,0Q1439.37,45.06,958.77,45,479.39,44.94,0,0H1920Z" />
            </svg>
            <svg class="brk-map__layer-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 45">
                <path d="M1920,45H0Q478.82.11,957.63,0,1438.82-.11,1920,45Z" />
            </svg>
            <div class="brk-map__opener-section brk-map__opener-section_round">
                <div class="brk-map__opener brk-map__opener_round font__family-montserrat font__weight-semibold font__size-14" style="width:0;padding-right:46px;">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                </div>
            </div>
            <div class="brk-map__section">
                <div class="brk-map__canvas" data-address="{{$contact['address'][$lang]}}" data-zoom="7" data-type="roadmap" data-lat="{{$contact['lat']}}" data-lng="{{$contact['lng']}}">
                </div>
            </div>
        </div>
    </section>
@endif