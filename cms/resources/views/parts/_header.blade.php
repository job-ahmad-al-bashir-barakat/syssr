<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin:: Header Menu -->
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
            <ul class="kt-menu__nav ">
                <li style="margin: auto;">
                    <span class="app-version-header kt-badge kt-badge--inline kt-badge--success">V.{{Config::get('app.version')}}</span>
                </li>
            </ul>
        </div>
    </div>
    <!-- end:: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">

        <!--begin: Language bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <img class="" src="{{asset('img/flags/'.LaravelLocalization::getCurrentLocale().'.png')}}" alt="lang_flag" />
                </span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if($localeCode==LaravelLocalization::getCurrentLocale())
                            <li class="kt-nav__item kt-nav__item--active">
                        @else
                            <li class="kt-nav__item">
                        @endif
                                <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="kt-nav__link">
                                    <span class="kt-nav__link-icon"><img src="{{asset('img/flags/'.$localeCode.'.png')}}" alt="lang_flag" /></span>
                                    <span class="kt-nav__link-text">{{trans('cms.'.$localeCode.'_name')}}</span>
                                </a>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--end: Language bar -->

        <!--begin: User Bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-welcome kt-hidden-mobile">{{trans('cms.hi')}},</span>
                    <span class="kt-header__topbar-username kt-hidden-mobile">{{ Auth::user()->first_name }}</span>
                    @if(Auth::user()->profile_photo)
                        <img class="" alt="Profile Photo" src="{{asset('users/photos/'.Auth::user()->profile_photo)}}" />
                    @else
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">{{ Auth::user()->first_name[0] }}</span>
                    @endif
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{asset('theme/media/misc/bg-1.jpg')}})">
                    <div class="kt-user-card__avatar">
                        @if(Auth::user()->profile_photo)
                            <img class="" alt="Profile Photo" src="{{asset('users/photos/'.Auth::user()->profile_photo)}}" />
                        @else
                            <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{ Auth::user()->first_name[0] }}</span>
                        @endif
                    </div>
                    <div class="kt-user-card__name">{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</div>
                </div>
                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
                    <div class="kt-notification__custom kt-space-between">
                        <a class="btn btn-label btn-label-brand btn-sm btn-bold" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{trans('cms.logout')}}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <!--end: Navigation -->
            </div>
        </div>

        <!--end: User Bar -->
    </div>
    <!-- end:: Header Topbar -->

</div>
<!-- end:: Header -->