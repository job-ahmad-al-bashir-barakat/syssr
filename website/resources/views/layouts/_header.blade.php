<div class="brk-header-mobile @if(Route::currentRouteName() != 'home') custom-header @endif">
    <div class="brk-header-mobile__open @if(Route::currentRouteName() != 'home') brk-header-mobile__open_white @endif">
        <span></span>
    </div>
    <div class="brk-header-mobile__logo">
        <a href="#"><img class="logo" src="{{ asset('custom/logo_icon/logo.png') }}" alt="" style="width: 110px;"></a>
    </div>
</div>
<header class="brk-header d-lg-flex flex-column brk-header_style-1 @if(Route::currentRouteName() == 'home') brk-header_color-dark @else brk-header_color-white custom-header @endif " style="display: none;" data-logo-src="custom/logo_icon/logo.png" data-bg-mobile="custom/logo_icon/logo.png" data-sticky-hide="0" data-brk-library="component__header">
    @if (session('status'))
        <div class="alert-message">
            <div data-brk-library="component__alert" class="alert alert-clean fade alert-info alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light show mb-0" role="alert" style="background: rgba(81,81,195,1); padding: 15px 31px;">
                <button type="button" class="close font__size-18" data-dismiss="alert">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    <span class="sr-only">{{ trans('app.close') }}</span>
                </button>
                {{--<i class="start-icon far fa-check-circle"></i>--}}
                <strong class="font__weight-semibold">😃</strong> {{ session('status') }}.
            </div>
        </div>
    @endif

    <div class="brk-header__main-bar brk-header_border-bottom order-lg-2 order-1 @if(Route::currentRouteName() == 'home') bg-white @endif" style="height: 72px;">
        <div class="container-fluid">
            <div class="row no-gutters align-items-center">
                <div class="col-lg align-self-lg-stretch">
                    <nav class="brk-nav brk-header__item">
                        <ul class="brk-nav__menu">
                            <li>
                                <a href="{{ RouteUrls::home() }}"><span>{{ trans('app.home') }}</span></a>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="{{ RouteUrls::aboutSociety() }}"><span>{{ trans('app.about_society') }}</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="{{ RouteUrls::whoWeAre() }}">{{ trans('app.who_we_are') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::societyGoals() }}">{{ trans('app.society_goals') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::membersSociety() }}">{{ trans('app.members_society') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::joinUs() }}">{{ trans('app.join_us') }}</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="{{ RouteUrls::newsSociety() }}"><span>{{ trans('app.news_society') }}</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="{{ RouteUrls::ads() }}">{{ trans('app.ads') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::opportunityJob() }}">{{ trans('app.opportunity_job') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::newsMembers() }}">{{ trans('app.news_members') }}</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="{{ RouteUrls::projects() }}"><span>{{ trans('app.projects') }}</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="#">{{ trans('app.project') }} 1</a></li>
                                    <li class="dd-effect"><a href="#">{{ trans('app.project') }} 2</a></li>
                                    <li class="dd-effect"><a href="#">{{ trans('app.project') }} 3</a></li>
                                    <li class="dd-effect"><a href="#">{{ trans('app.project') }} 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ RouteUrls::workshop() }}"><span>{{ trans('app.workshop') }}</span></a>
                            </li>
                            <li>
                                <a href="{{ RouteUrls::contact() }}"><span>{{ trans('app.contact') }}</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 align-self-lg-center d-none d-lg-block">
                    <div class="text-center">
                        <a href="{{ RouteUrls::home() }}" class="brk-header__logo brk-header__item @@modifier" style="width: 110px;">
                            <img class="brk-header__logo-1 logo lazyload" src="{{ asset('custom/logo_icon/logo.png') }}" data-src="{{ asset('custom/logo_icon/logo.png') }}" alt="alt">
                            <img class="brk-header__logo-2 logo lazyload" src="{{ asset('custom/logo_icon/logo.png') }}" data-src="{{ asset('custom/logo_icon/logo.png') }}" alt="alt">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 align-self-lg-stretch text-lg-right">
                    <div class="brk-header__title font__family-montserrat font__weight-bold">{{ trans('app.menu_extra') }}</div>
                    <div class="brk-call-us brk-header__item">
                        <a href="tel:{{$default_contact->mobile_1}}" class="brk-call-us__number"><i class="fa fa-phone" aria-hidden="true"></i>{{$default_contact->mobile_1}}</a>
                        <a href="tel:{{$default_contact->mobile_1}}" class="brk-call-us__link"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    </div>
                    <div class="brk-lang brk-header__item">
                        <span class="brk-lang__selected">{{ strtoupper(LaravelLocalization::getCurrentLocale()) }} <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                        <span class="brk-lang__open"><i class="fa fa-language"></i> {{ trans('app.language') }} <span class="brk-lang__active-lang text-white brk-bg-primary">{{ strtoupper(LaravelLocalization::getCurrentLocale()) }}</span></span>
                        <ul class="brk-lang__option">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li><a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}">{{ strtoupper($localeCode) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="brk-social-links brk-header__item">
                        <div class="brk-social-links__open">
                            <i class="fa fa-share-alt"></i>
                            <div class="brk-social-links__title">{{ trans('app.share_our_website') }}</div>
                        </div>
                        <div class="brk-social-links__block">
                            <div class="brk-social-links__header">
                                <span class="font__family-montserrat font__weight-bold font__size-18">{{ trans('app.share_our_website') }}</span>
                            </div>
                            <div class="brk-social-links__content">
                                <a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="brk-search brk-header__item">
                        <div class="brk-search__open">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <div class="brk-search__title">{{ trans('app.search_website') }}</div>
                        </div>
                        <div class="brk-search__block">
                            <div class="brk-search__header">
                                <span class="font__family-montserrat font__weight-bold font__size-18">{{ trans('app.search') }}</span>
                            </div>
                            <form class="brk-search__form" role="search" method="get" action="#">
                                <input name="s" maxlength="50" type="search" value="" placeholder="{{ trans('app.enter_search_text') }}">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <span class="brk-search__close font__family-montserrat font__weight-medium">{{ trans('app.close') }} <i class="fas fa-times"></i></span>
                        </div>
                    </div>

                    @auth
                        <div class="brk-user brk-header__item">
                            <div class="brk-user__open"><i class="fa fa-user"></i>
                                <div class="brk-user__title">{{ trans('app.user_menu') }}</div>
                            </div>
                            <div class="brk-user__block">
                                <div class="brk-user__content">
                                    <div class="user-info">
                                        <img src="{{ Auth::user()->avatar_url ?? asset('custom/img/user-image.png') }}" alt="image">
                                        <div class="user-info-wrapper">
                                            <div class="user-name font__family-montserrat">
                                                <span>{{Auth::user()->first_name}}</span>
                                            </div>
                                            <div class="user-links">
                                                <a href="{{ RouteUrls::profile() }}">{{ trans('app.profile') }}</a>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ trans('app.logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth

                    @guest
                        <a href="{{ RouteUrls::login() }}">
                            <div class="brk-user brk-header__item">
                                <div class="brk-user__open">
                                    <i class="fa fa-user"></i>
                                    <div class="brk-user__title">{{ trans('app.user_menu') }}</div>
                                </div>
                            </div>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
