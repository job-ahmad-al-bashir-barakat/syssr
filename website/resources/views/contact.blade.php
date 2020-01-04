@extends('layouts.app')

@section('title',trans('app.title_contact'))

@section('content')
    @include('partials._breadcrumbs',['title' => trans('app.contact'), 'banner' => asset('img/syssr/contact-us-banner.jpg')])
    <div class="main-wrapper">
        <main class="main-container">
            @if(count($contacts)>1)
                <div class="brk-tabs tabs brk-tabs-simple" data-hash="true" data-brk-library="component__tabs">
                    <ul class="brk-tabs-nav font__family-montserrat font__weight-bold">
                        @foreach($contacts as $contact)
                            <li data-tab="tab-{{$contact['id']}}" class="brk-tab @if($loop->first) active @endif"><span>{{ $contact['name'][$lang] }}</span></li>
                        @endforeach
                    </ul>
                    <div class="brk-tabs-content">
                        @foreach($contacts as $contact)
                            <div id="tab-{{$contact['id']}}" class="brk-tab-item tab text-center text-lg-left @if($loop->first) active @endif">
                                @include('_contact', ['contact' =>  $contact])
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                @if(count($contacts)>0)
                    @include('_contact', ['contact' =>  $contacts[0]])
                @else
                    <div class="pt-80 pb-80"></div>
                @endif
            @endif
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
                    <div class="brk-footer__rights pt-15 pb-20 text-center">
                        <p class="font__family-open-sans font__size-14 font__weight-normal line__height-14">© {{ date('Y') }} {!! trans('app.copyright') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('script')
    <script src="{{ asset('custom/plugin/parsley.js/parsley.min.js') }}"></script>
    <script src="{{ asset("custom/plugin/parsley.js/i18n/$lang.js") }}"></script>
    <script src="{{ asset('custom/js/app.js') }}"></script>
    <script src="{{ asset('custom/js/contact.js') }}"></script>
@endsection