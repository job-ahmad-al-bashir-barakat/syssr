<header class="brk-header d-lg-flex flex-column brk-header_style-1 brk-header_color-dark" style="display: none;" data-logo-src="img/logo-dark-2.png" data-bg-mobile="img/brk-bg-mobile-menu.jpg" data-sticky-hide="0" data-brk-library="component__header">
    <div class="brk-header__main-bar brk-header_border-bottom order-lg-2 order-1 bg-white" style="height: 72px;">
        <div class="container-fluid">
            <div class="row no-gutters align-items-center">
                <div class="col-lg align-self-lg-stretch">
                    <nav class="brk-nav brk-header__item">
                        <ul class="brk-nav__menu">
                            <li>
                                <a href="{{ RouteUrls::home() }}"><span>Home</span></a>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="#"><span>About Society</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="{{ RouteUrls::aboutUs() }}">About Us</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::viewSociety() }}">View Society</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::membersSociety() }}">Members Society</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::joinUs() }}">Join Us</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="#"><span>News Society</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="{{ RouteUrls::ads() }}">Ads</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::opportunityJob() }}">Opportunity Job</a></li>
                                    <li class="dd-effect"><a href="{{ RouteUrls::newsMembers() }}">News Members</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect">
                                <a href="#"><span>Projects</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="blog.html">Project 1</a></li>
                                    <li class="dd-effect"><a href="blog.html">Project 2</a></li>
                                    <li class="dd-effect"><a href="blog.html">Project 3</a></li>
                                    <li class="dd-effect"><a href="blog.html">Project 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ RouteUrls::workshop() }}"><span>Workshop</span></a>
                            </li>
                            <li>
                                <a href="{{ RouteUrls::contact() }}"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 align-self-lg-center d-none d-lg-block">
                    <div class="text-center">
                        <a href="/" class="brk-header__logo brk-header__item @@modifier" style="width: 110px;">
                            <img class="brk-header__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('custom/logo_icon/logo.png') }}" alt="alt">
                            <img class="brk-header__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('custom/logo_icon/logo.png') }}" alt="alt">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 align-self-lg-stretch text-lg-right">
                    <div class="brk-header__title font__family-montserrat font__weight-bold">Menu Extra</div>
                    <div class="brk-call-us brk-header__item"><a href="tel:88001234567" class="brk-call-us__number"><i class="fa fa-phone" aria-hidden="true"></i> 8 800 12 34 567</a> <a href="tel:88001234567" class="brk-call-us__link"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
                    <div class="brk-lang brk-header__item"><span class="brk-lang__selected">EN <i class="fa fa-caret-down" aria-hidden="true"></i></span> <span class="brk-lang__open"><i class="fa fa-language"></i> Language <span class="brk-lang__active-lang text-white brk-bg-primary">US</span></span>
                        <ul class="brk-lang__option">
                            <li><a href="#">EN</a></li>
                            <li><a href="#">AR</a></li>
                        </ul>
                    </div>
                    <div class="brk-search brk-header__item">
                        <div class="brk-search__open"><i class="fa fa-search" aria-hidden="true"></i>
                            <div class="brk-search__title">Search website</div>
                        </div>
                        <div class="brk-search__block">
                            <div class="brk-search__header"><span class="font__family-montserrat font__weight-bold font__size-18">Search</span></div>
                            <form class="brk-search__form" role="search" method="get" action="#">
                                <input name="s" maxlength="50" type="search" value="" placeholder="Enter search text">
                                <button type="submit"><i class="fas fa-search"></i></button></form>
                            <span class="brk-search__close font__family-montserrat font__weight-medium">Close <i class="fas fa-times"></i></span>
                        </div>
                    </div>
                    @auth
                    <div class="brk-user brk-header__item">
                        <div class="brk-user__open"><i class="fa fa-user"></i>
                            <div class="brk-user__title">User Menu</div>
                        </div>
                        <div class="brk-user__block">
                            <div class="brk-user__content">
                                <div class="user-info">
                                    <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="image">
                                    <div class="user-name">
                                        @Ahmad
                                        <span>Full Stack Dev</span>
                                    </div>
                                </div>
                                <div><a href="{{ RouteUrls::profile() }}">Profile</a></div>
                                <div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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
                                    <div class="brk-user__title">User Menu</div>
                                </div>
                            </div>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
