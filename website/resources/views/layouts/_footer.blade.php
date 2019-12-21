@section('footer')
    <footer class="brk-footer position-relative" data-brk-library="component__footer">
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
    </footer>
@show
