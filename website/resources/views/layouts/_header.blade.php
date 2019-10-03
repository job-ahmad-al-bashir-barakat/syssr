<header class="brk-header d-lg-flex flex-column brk-header_style-1 brk-header_color-dark" style="display: none;" data-logo-src="img/logo-dark-2.png" data-bg-mobile="img/brk-bg-mobile-menu.jpg" data-sticky-hide="0" data-brk-library="component__header">
    <div class="brk-header__main-bar brk-header_border-bottom order-lg-2 order-1 bg-white" style="height: 72px;">
        <div class="container-fluid">
            <div class="row no-gutters align-items-center">
                <div class="col-lg align-self-lg-stretch">
                    <nav class="brk-nav brk-header__item">
                        <ul class="brk-nav__menu">
                            <li>
                                <a href="{{ RouteUrls::home() }}"><span>{{ trans('app.home') }}</span></a>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="#"><span>{{ trans('app.about_society') }}</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="{{ RouteUrls::aboutUs() }}">{{ trans('app.about_us') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::viewSociety() }}">{{ trans('app.view_society') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::membersSociety() }}">{{ trans('app.members_society') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::joinUs() }}">{{ trans('app.join_us') }}</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="#"><span>{{ trans('app.news_society') }}</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="{{ RouteUrls::ads() }}">{{ trans('app.ads') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::opportunityJob() }}">{{ trans('app.opportunity_job') }}</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::newsMembers() }}">{{ trans('app.news_members') }}</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="#"><span>{{ trans('app.projects') }}</span></a>
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
                            <img class="brk-header__logo-1 lazyload" src="{{ asset('custom/logo_icon/logo.png') }}" data-src="{{ asset('custom/logo_icon/logo.png') }}" alt="alt">
                            <img class="brk-header__logo-2 lazyload" src="{{ asset('custom/logo_icon/logo.png') }}" data-src="{{ asset('custom/logo_icon/logo.png') }}" alt="alt">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 align-self-lg-stretch text-lg-right">
                    <div class="brk-header__title font__family-montserrat font__weight-bold">{{ trans('app.menu_extra') }}</div>
                    <div class="brk-call-us brk-header__item">
                        <a href="tel:88001234567" class="brk-call-us__number"><i class="fa fa-phone" aria-hidden="true"></i> 8 800 12 34 567</a>
                        <a href="tel:88001234567" class="brk-call-us__link"><i class="fa fa-phone" aria-hidden="true"></i></a>
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
                                        <img src="{{ asset('custom/img/user-image.png') }}" alt="image">
                                        <div class="user-info-wrapper">
                                            <div class="user-name">
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
