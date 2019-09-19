<!DOCTYPE html>
<html class="brk-preloader" lang="en" data-brk-skin="brk-gray-yellow.css">

<head>
    <title>Magazine - Home - Berserk HTML</title>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="favicon.ico">
    <meta name="theme-color" content="#2775FF">
    <meta name="keywords" content="themeforest, theme, html, template">
    <meta name="description" content="themeforest, theme, html, template">
    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('css/assets/bootstrap.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" id="brk-skin-color" href="{{ asset('css/skins/brk-gray-yellow.css') }}">
    <link id="brk-base-color" rel="stylesheet" href="{{ asset('css/skins/brk-base-color.css') }}">
    <link rel="stylesheet" id="brk-direction-offsets" href="{{ asset('css/assets/offsets.css') }}">
    <link id="brk-css-min" rel="stylesheet" href="{{ asset('css/assets/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/revslider/css/settings.css') }}">
</head>

<body>
<style>.rev-brk-social{box-shadow:none !important}.magazine-big-font{background-image:url(img/demo_magazine/420x200_1.jpg);font-size: 256px;line-height: 200px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 575px){.magazine-big-font{font-size: 150px;}}</style>
<div class="main-page">
    <div class="brk-header-mobile">
        <div class="brk-header-mobile__open brk-header-mobile__open_white"><span></span></div>
        <div class="brk-header-mobile__logo"><a href="#"><img src="img/logo-2.png" alt=""></a></div>
</div>
<header class="brk-header d-lg-flex flex-column brk-header_style-1 brk-header_color-dark" style="display: none;" data-logo-src="img/logo-dark-2.png" data-bg-mobile="img/brk-bg-mobile-menu.jpg" data-sticky-hide="0" data-brk-library="component__header">
    <div class="brk-header__main-bar brk-header_border-bottom order-lg-2 order-1 bg-white" style="height: 72px;">
        <div class="container-fluid">
            <div class="row no-gutters align-items-center">
                <div class="col-lg align-self-lg-stretch">
                    <nav class="brk-nav brk-header__item">
                        <ul class="brk-nav__menu">
                            <li class="brk-nav__children brk-nav__full-width"><a href="/" data-brk-library="component__tabs"><span>Home</span></a>
                                <div class="brk-nav__mega-menu brk-nav-drop-down">
                                    <div class="bg-white">
                                        <div class="brk-tabs brk-tabs-hovers" data-index="0">
                                            <ul class="brk-tabs-nav font__family-open-sans">
                                                <li class="brk-tab font__weight-bold"><i class="fa fa-tasks"></i> Demos</li>
                                                <li class="brk-tab font__weight-bold"><i class="fa fa-trophy"></i> HomePages</li>
                                                <li class="brk-tab font__weight-bold"><i class="fa fa-life-ring"></i> Support &amp; Info</li>
                                            </ul>
                                            <div class="brk-tabs-content">
                                                <div class="brk-tab-item">
                                                    <div class="row no-gutters">
                                                        <div class="col-lg">
                                                            <div class="brk-nav__header font__family-montserrat">Check</div>
                                                            <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                                <ul class="brk-header-list font__family-montserrat">
                                                                    <li><a href="/demo_agency_animation.html"><span class="brk-header-list__icon"><i class="fas fa-paper-plane"></i> </span>Agency Animation</a></li>
                                                                    <li><a href="/demo_agency_fluid.html"><span class="brk-header-list__icon"><i class="fas fa-tint"></i> </span>Agency Fluid</a></li>
                                                                    <li><a href="/demo_agency_modern.html"><span class="brk-header-list__icon"><i class="fas fa-gift"></i> </span>Agency Modern</a></li>
                                                                    <li><a href="/demo_agency_urban.html"><span class="brk-header-list__icon"><i class="fas fa-university"></i> </span>Agency Urban</a></li>
                                                                    <li><a href="/demo_art.html"><span class="brk-header-list__icon"><i class="fas fa-newspaper"></i> </span>Art</a></li>
                                                                    <li><a href="/demo_saas.html"><span class="brk-header-list__icon"><i class="fas fa-camera-retro"></i> </span>SAAS <span class="brk-header-list__info bg-success font__family-montserrat">Ver. 1.5</span></a></li>
                                                                    <li><a href="/demo_winter_trip_agency.html"><span class="brk-header-list__icon"><i class="fas fa-snowflake"></i> </span>Winter Trip Agency <span class="brk-header-list__info bg-success font__family-montserrat">Ver. 1.6</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg">
                                                            <div class="brk-nav__header font__family-montserrat">Out</div>
                                                            <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                                <ul class="brk-header-list font__family-montserrat">
                                                                    <li><a href="/demo_construction.html"><span class="brk-header-list__icon"><i class="fas fa-home"></i> </span>Construction</a></li>
                                                                    <li><a href="/demo_creative_agency.html"><span class="brk-header-list__icon"><i class="fab fa-angrycreative"></i> </span>Creative Agency</a></li>
                                                                    <li><a href="/demo_freelance_blog.html"><span class="brk-header-list__icon"><i class="fas fa-user-friends"></i> </span>Freelance Blog</a></li>
                                                                    <li><a href="/demo_freelance_portfolio.html"><span class="brk-header-list__icon"><i class="fas fa-portrait"></i> </span>Freelance Portfolio</a></li>
                                                                    <li><a href="/demo_logistic.html"><span class="brk-header-list__icon"><i class="fas fa-truck"></i> </span>Logistic</a></li>
                                                                    <li><a href="/demo_website_agency.html"><span class="brk-header-list__icon"><i class="far fa-images"></i> </span>Website Agency</a></li>
                                                                    <li><a href="/demo_winter_trip_agency_cta.html"><span class="brk-header-list__icon"><i class="fas fa-snowflake"></i> </span>Winter Event Anounce <span class="brk-header-list__info bg-success font__family-montserrat">Ver. 1.7</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg">
                                                            <div class="brk-nav__header font__family-montserrat">Our</div>
                                                            <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                                <ul class="brk-header-list font__family-montserrat">
                                                                    <li><a href="/demo_shop_clothes.html"><span class="brk-header-list__icon"><i class="fas fa-tshirt"></i> </span>Shop Clothes <span class="brk-header-list__info bg-warning font__family-montserrat">Shop</span></a></li>
                                                                    <li><a href="/demo_shop_drone.html"><span class="brk-header-list__icon"><i class="fab fa-phoenix-squadron"></i> </span>Shop Drone <span class="brk-header-list__info bg-warning font__family-montserrat">Shop</span></a></li>
                                                                    <li><a href="/demo_shop_electronics.html"><span class="brk-header-list__icon"><i class="fas fa-bolt"></i> </span>Shop Electronics <span class="brk-header-list__info bg-warning font__family-montserrat">Shop</span></a></li>
                                                                    <li><a href="/demo_shop_modern.html"><span class="brk-header-list__icon"><i class="fas fa-people-carry"></i> </span>Shop Modern <span class="brk-header-list__info bg-warning font__family-montserrat">Shop</span></a></li>
                                                                    <li><a href="/demo_shop_trendy.html"><span class="brk-header-list__icon"><i class="fas fa-dollar-sign"></i> </span>Shop Trendy <span class="brk-header-list__info bg-warning font__family-montserrat">Shop</span></a></li>
                                                                    <li><a href="/demo_shop_video.html"><span class="brk-header-list__icon"><i class="fas fa-video"></i> </span>Shop Video <span class="brk-header-list__info bg-warning font__family-montserrat">Shop</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg">
                                                            <div class="brk-nav__header font__family-montserrat">Demos</div>
                                                            <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                                <ul class="brk-header-list font__family-montserrat">
                                                                    <li><a href="/demo_magazine.html"><span class="brk-header-list__icon"><i class="far fa-window-restore"></i> </span>Magazine</a></li>
                                                                    <li><a href="/demo_photography.html"><span class="brk-header-list__icon"><i class="fas fa-camera-retro"></i> </span>Photography</a></li>
                                                                    <li><a href="/demo_product_landing.html"><span class="brk-header-list__icon"><i class="fab fa-product-hunt"></i> </span>Product Landing <span class="brk-header-list__info bg-success font__family-montserrat">New</span></a></li>
                                                                    <li><a href="/demo_product_sport.html"><span class="brk-header-list__icon"><i class="fas fa-futbol"></i> </span>Sports Products <span class="brk-header-list__info bg-success font__family-montserrat">New</span></a></li>
                                                                    <li><a href="/demo_spa.html"><span class="brk-header-list__icon"><i class="fas fa-dove"></i> </span>Spa &amp; Beauty <span class="brk-header-list__info bg-success font__family-montserrat">New</span></a></li>
                                                                    <li><a href="/demo_minimalistic_portfolio.html"><span class="brk-header-list__icon"><i class="fas fa-camera-retro"></i> </span>Portfolio Minimalistic <span class="brk-header-list__info bg-success font__family-montserrat">Ver. 1.3</span></a></li>
                                                                    <li><a href="/demo_travel_agency.html"><span class="brk-header-list__icon"><i class="fas fa-plane"></i> </span>Travel Agency <span class="brk-header-list__info bg-success font__family-montserrat">Ver. 1.1</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="brk-tab-item">
                                                    <div class="row no-gutters">
                                                        <div class="col-lg d-none d-lg-block">
                                                            <div class="brk-nav__header font__family-montserrat">Preview</div>
                                                            <div class="brk-element-base brk-header_border-right text-center lazyload" data-bg="img/662x295.jpg" style="height: calc(100% - 76px)">
                                                                <div class="brk-element-base__before"></div>
                                                                <div class="brk-element-base__after lazyload" data-bg="img/shape-01.png"></div>
                                                                <div class="brk-element-base__content center-absolute">
                                                                    <div class="mb-20"><img src="img/logo.svg" alt="alt"></div>
                                                                    <div class="pb-10"><a href="#" class="btn btn-inside-out btn-md border-radius-25 font__family-open-sans font__weight-bold btn-inside-out-invert" data-brk-library="component__button"><span class="before">Purchase</span><span class="text">Click Me</span><span class="after">Purchase</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg">
                                                            <div class="brk-nav__header font__family-montserrat">Our</div>
                                                            <div class="brk-header_border-right pt-lg-20 pb-lg-60 pb-20" style="height: calc(100% - 76px)">
                                                                <ul class="brk-header-list font__family-montserrat">
                                                                    <li><a href="home-page-1.html"><span class="brk-header-list__icon"><i class="fa fa-male" aria-hidden="true"></i> </span>Home page 1</a></li>
                                                                    <li><a href="home-page-2.html"><span class="brk-header-list__icon"><i class="fa fa-cube" aria-hidden="true"></i> </span>Home page 2</a></li>
                                                                    <li><a href="home-page-3.html"><span class="brk-header-list__icon"><i class="fa fa-qrcode" aria-hidden="true"></i> </span>Home page 3</a></li>
                                                                    <li><a href="home-page-4.html"><span class="brk-header-list__icon"><i class="fa fa-sign-language" aria-hidden="true"></i> </span>Home page 4</a></li>
                                                                    <li><a href="home-page-5.html"><span class="brk-header-list__icon"><i class="fa fa-university" aria-hidden="true"></i> </span>Home page 5</a></li>
                                                                    <li><a href="home-page-6.html"><span class="brk-header-list__icon"><i class="fa fa-cube" aria-hidden="true"></i> </span>Home page 6</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg">
                                                            <div class="brk-nav__header font__family-montserrat">Home</div>
                                                            <div class="brk-header_border-right pt-lg-20 pb-lg-60 pb-20" style="height: calc(100% - 76px)">
                                                                <ul class="brk-header-list font__family-montserrat">
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 7 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 8 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 9 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 10 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 11 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 12 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg">
                                                            <div class="brk-nav__header font__family-montserrat">Pages</div>
                                                            <div class="brk-header_border-right pt-lg-20 pb-lg-60 pb-20" style="height: calc(100% - 76px)">
                                                                <ul class="brk-header-list font__family-montserrat">
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 13 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 14 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 15 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 16 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 17 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                    <li><a href="/"><span class="brk-header-list__icon"><i class="fas fa-archive"></i> </span>Home page 18 <span class="brk-header-list__info bg-info font__family-montserrat">SOON</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="brk-tab-item">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="mt-30 mb-30 pr-15 pr-lg-0 pl-15 pl-lg-15"><img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/tiles-simple-1.jpg" alt="alt"></div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="pr-15 pr-lg-0 pl-15 pl-lg-15">
                                                                <h2 class="font__family-montserrat text-uppercase font__size-24 mb-40 mt-30">How Glossier Hacked Social Media</h2>
                                                                <p class="brk-dark-font-color text-left mb-20">On a Thursday afternoon in late spring, 32-year-old Glossier founder and CEO Emily Weiss rides the elevator to the penthouse level of her company&apos;s downtown Manhattan headquarters. She&apos;s a thoroughly millennial girlboss in jeans, sneakers and a royal blue sweatshirt with weiss embroidered in small white script. Her hair is pulled back in a ponytail, and for the founder of a beauty products company, she wears notably little makeup - just some mascara and possibly a swipe of Glossier Lip Gloss, a recent product release touted online as having a &quot;fuzzy doe-foot applicator.&quot;</p>
                                                                <p class="brk-dark-font-color text-left mb-20">A former teen model, Weiss is beautiful but not intimidating, either by nature or by design (probably a little of both). After all, her company&#x2019;s popularity is directly related to her ability to cultivate a feeling of friendship with and among her customers. Just enough relatability is key.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect"><a href="#"><span>Blog</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="blog.html">Blog</a></li>
                                    <li class="dd-effect"><a href="blog-page.html">Blog post</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect"><a href="#"><span>Pages</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect brk-nav__children brk-nav__drop-down-effect"><a href="#">Headers <i class="fas fa-angle-right"></i></a>
                                        <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                            <li class="dd-effect"><a href="header-1.html">Header 1</a></li>
                                            <li class="dd-effect"><a href="header-2.html">Header 2</a></li>
                                            <li class="dd-effect"><a href="header-3.html">Header 3</a></li>
                                            <li class="dd-effect"><a href="header-4.html">Header 4</a></li>
                                            <li class="dd-effect"><a href="header-5.html">Header 5</a></li>
                                            <li class="dd-effect"><a href="header-6.html">Header 6</a></li>
                                            <li class="dd-effect"><a href="header-7.html">Header 7</a></li>
                                            <li class="dd-effect"><a href="header-7-popup.html">Header 7 Popup</a></li>
                                        </ul>
                                    </li>
                                    <li class="dd-effect brk-nav__children brk-nav__drop-down-effect"><a href="#">Headers Extra <i class="fas fa-angle-right"></i></a>
                                        <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                            <li class="dd-effect"><a href="header-8.html">Header 8</a></li>
                                            <li class="dd-effect"><a href="header-9.html">Header 9</a></li>
                                            <li class="dd-effect"><a href="header-10.html">Header 10</a></li>
                                            <li class="dd-effect"><a href="header-11.html">Header 11</a></li>
                                            <li class="dd-effect"><a href="header-12.html">Header 12</a></li>
                                            <li class="dd-effect"><a href="header-13.html">Header 13</a></li>
                                            <li class="dd-effect"><a href="header-14.html">Header 14</a></li>
                                            <li class="dd-effect"><a href="header-vertical-1.html">Header Vertical 1</a></li>
                                            <li class="dd-effect"><a href="header-vertical-2.html">Header Vertical 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dd-effect"><a href="breadcrumbs.html">Breadcrubms</a></li>
                                    <li class="dd-effect"><a href="footer.html">Footers</a></li>
                                    <li class="dd-effect brk-nav__children brk-nav__drop-down-effect"><a href="#">Forum <i class="fas fa-angle-right"></i></a>
                                        <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                            <li class="dd-effect"><a href="forum-main.html">Forum main page</a></li>
                                            <li class="dd-effect"><a href="forum-post.html">Forum post</a></li>
                                            <li class="dd-effect"><a href="forum-author.html">Forum author</a></li>
                                        </ul>
                                    </li>
                                    <li class="dd-effect brk-nav__children brk-nav__drop-down-effect"><a href="#">Galleries <i class="fas fa-angle-right"></i></a>
                                        <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                            <li class="dd-effect"><a href="gallery-2-cols.html">Gallery 2 Cols</a></li>
                                            <li class="dd-effect"><a href="gallery-3-cols-masonry.html">Gallery 3 Cols Masonry</a></li>
                                            <li class="dd-effect"><a href="gallery-4-cols.html">Gallery 4 Cols</a></li>
                                            <li class="dd-effect"><a href="gallery-4-cols-wide.html">Gallery 4 Cols Wide</a></li>
                                            <li class="dd-effect"><a href="gallery-6-cols.html">Gallery 6 Cols</a></li>
                                            <li class="dd-effect"><a href="gallery-cols.html">Gallery Cols</a></li>
                                            <li class="dd-effect"><a href="gallery-sliders.html">Gallery Sliders</a></li>
                                        </ul>
                                    </li>
                                    <li class="dd-effect"><a href="company-services.html">Company Services</a></li>
                                    <li class="dd-effect brk-nav__children brk-nav__drop-down-effect"><a href="#">Contact us <i class="fas fa-angle-right"></i></a>
                                        <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                            <li class="dd-effect"><a href="contact-us.html">Contact us</a></li>
                                            <li class="dd-effect"><a href="contact-us-bussines.html">Contact us bussines</a></li>
                                        </ul>
                                    </li>
                                    <li class="dd-effect"><a href="404.html">Page not found - 404</a></li>
                                    <li class="dd-effect"><a href="403.html">Access denied - 403</a></li>
                                    <li class="dd-effect"><a href="login.html">Login</a></li>
                                    <li class="dd-effect"><a href="register.html">Register</a></li>
                                    <li class="dd-effect"><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect"><a href="#"><span>Portfolio</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="portfolio-categories.html">Portfolio categories</a></li>
                                    <li class="dd-effect"><a href="portfolio-galleries.html">Portfolio galleries</a></li>
                                    <li class="dd-effect"><a href="portfolio-grid.html">Portfolio grid</a></li>
                                    <li class="dd-effect"><a href="portfolio-isotope.html">Portfolio isotope</a></li>
                                    <li class="dd-effect"><a href="portfolio-list.html">Portfolio list</a></li>
                                    <li class="dd-effect"><a href="portfolio-masonry.html">Portfolio masonry</a></li>
                                    <li class="dd-effect"><a href="portfolio-page.html">Portfolio page</a></li>
                                    <li class="dd-effect"><a href="portfolio-rows.html">Portfolio rows</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__drop-down-effect"><a href="#"><span>Shop</span></a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                    <li class="dd-effect"><a href="shop-components-flip.html">Shop flip</a></li>
                                    <li class="dd-effect"><a href="shop-components-grid.html">Shop grid</a></li>
                                    <li class="dd-effect"><a href="shop-components-grid-filter.html">Shop grid-filter</a></li>
                                    <li class="dd-effect"><a href="shop-components-honeycomb.html">Shop honeycomb</a></li>
                                    <li class="dd-effect"><a href="shop-components-item-sidebar.html">Shop item with sidebar</a></li>
                                    <li class="dd-effect"><a href="shop-components-list.html">Shop list</a></li>
                                    <li class="dd-effect"><a href="shop-components-masonry.html">Shop masonry</a></li>
                                    <li class="dd-effect"><a href="demo_product_landing.html">Shop single product item</a></li>
                                    <li class="dd-effect"><a href="shop-components-row.html">Shop row</a></li>
                                    <li class="dd-effect"><a href="shop-components-tiles.html">Shop tiles</a></li>
                                    <li class="dd-effect"><a href="cart.html">Shop cart</a></li>
                                    <li class="dd-effect"><a href="checkout.html">Shop checkout</a></li>
                                    <li class="dd-effect"><a href="shop-components-compare.html">Shop Compare</a></li>
                                </ul>
                            </li>
                            <li class="brk-nav__children brk-nav__full-width brk-nav__drop-down-effect"><a href="#"><span>Elements</span></a>
                                <div class="brk-nav__mega-menu brk-nav-drop-down">
                                    <div class="bg-white">
                                        <div class="row no-gutters">
                                            <div class="col-xl-2 col-lg-4">
                                                <div class="brk-nav__header font__family-montserrat">ELEMENTS</div>
                                                <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                    <ul class="brk-header-list font__family-montserrat">
                                                        <li class="dd-effect"><a href="accordions.html"><span class="brk-header-list__icon"><i class="fa fa-id-card" aria-hidden="true"></i> </span>Accordions</a></li>
                                                        <li class="dd-effect"><a href="alerts.html"><span class="brk-header-list__icon"><i class="fa fa-university" aria-hidden="true"></i> </span>Alerts</a></li>
                                                        <li class="dd-effect"><a href="app.html"><span class="brk-header-list__icon"><i class="fa fa-cube" aria-hidden="true"></i> </span>App</a></li>
                                                        <li class="dd-effect"><a href="backgrounds.html"><span class="brk-header-list__icon"><i class="far fa-gem" aria-hidden="true"></i> </span>Backgrounds</a></li>
                                                        <li class="dd-effect"><a href="breadcrumbs.html"><span class="brk-header-list__icon"><i class="fa fa-life-ring" aria-hidden="true"></i> </span>Breadcrumbs</a></li>
                                                        <li class="dd-effect"><a href="buttons.html"><span class="brk-header-list__icon"><i class="fa fa-male" aria-hidden="true"></i> </span>Buttons</a></li>
                                                        <li class="dd-effect"><a href="CFA.html"><span class="brk-header-list__icon"><i class="fa fa-sign-language" aria-hidden="true"></i> </span>CFA</a></li>
                                                        <li class="dd-effect"><a href="content-sliders.html"><span class="brk-header-list__icon"><i class="fa fa-qrcode" aria-hidden="true"></i> </span>Content sliders</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-4">
                                                <div class="brk-nav__header font__family-montserrat">ELEMENTS</div>
                                                <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                    <ul class="brk-header-list font__family-montserrat">
                                                        <li class="dd-effect"><a href="countdown.html"><span class="brk-header-list__icon"><i class="fa fa-university" aria-hidden="true"></i> </span>Countdown</a></li>
                                                        <li class="dd-effect"><a href="counter.html"><span class="brk-header-list__icon"><i class="fa fa-cube" aria-hidden="true"></i> </span>Counter</a></li>
                                                        <li class="dd-effect"><a href="counter-dark.html"><span class="brk-header-list__icon"><i class="far fa-gem" aria-hidden="true"></i> </span>Counter dark</a></li>
                                                        <li class="dd-effect"><a href="delimiters.html"><span class="brk-header-list__icon"><i class="fa fa-id-card" aria-hidden="true"></i> </span>Delimiters</a></li>
                                                        <li class="dd-effect"><a href="dividers.html"><span class="brk-header-list__icon"><i class="fa fa-life-ring" aria-hidden="true"></i> </span>Dividers</a></li>
                                                        <li class="dd-effect"><a href="flip-boxes.html"><span class="brk-header-list__icon"><i class="fa fa-male" aria-hidden="true"></i> </span>Flip boxes</a></li>
                                                        <li class="dd-effect"><a href="form-controls.html"><span class="brk-header-list__icon"><i class="fa fa-tasks" aria-hidden="true"></i> </span>Form controls</a></li>
                                                        <li class="dd-effect"><a href="google-maps.html"><span class="brk-header-list__icon"><i class="fa fa-map" aria-hidden="true"></i> </span>Google maps</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-4">
                                                <div class="brk-nav__header font__family-montserrat">ELEMENTS</div>
                                                <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                    <ul class="brk-header-list font__family-montserrat">
                                                        <li class="dd-effect"><a href="image-caption-parallax.html"><span class="brk-header-list__icon"><i class="fa fa-sign-language" aria-hidden="true"></i> </span>Image caption</a></li>
                                                        <li class="dd-effect"><a href="image-frames.html"><span class="brk-header-list__icon"><i class="fa fa-qrcode" aria-hidden="true"></i> </span>Image frames</a></li>
                                                        <li class="dd-effect"><a href="image-map.html"><span class="brk-header-list__icon"><i class="fa fa-university" aria-hidden="true"></i> </span>Image map</a></li>
                                                        <li class="dd-effect"><a href="icons.html"><span class="brk-header-list__icon"><i class="fab fa-font-awesome-alt"></i> </span>Icons <span class="brk-header-list__info bg-success font__family-montserrat">New</span></a></li>
                                                        <li class="dd-effect"><a href="info-box.html"><span class="brk-header-list__icon"><i class="fa fa-cube" aria-hidden="true"></i> </span>Info box</a></li>
                                                        <li class="dd-effect"><a href="lists.html"><span class="brk-header-list__icon"><i class="far fa-gem" aria-hidden="true"></i> </span>Lists</a></li>
                                                        <li class="dd-effect"><a href="logo.html"><span class="brk-header-list__icon"><i class="far fa-gem" aria-hidden="true"></i> </span>Logo</a></li>
                                                        <li class="dd-effect"><a href="media-embeds.html"><span class="brk-header-list__icon"><i class="fa fa-id-card" aria-hidden="true"></i> </span>Media embeds</a></li>
                                                        <li class="dd-effect"><a href="pagination.html"><span class="brk-header-list__icon"><i class="fa fa-life-ring" aria-hidden="true"></i> </span>Pagination</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-4">
                                                <div class="brk-nav__header font__family-montserrat">ELEMENTS</div>
                                                <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                    <ul class="brk-header-list font__family-montserrat">
                                                        <li class="dd-effect"><a href="parallax.html"><span class="brk-header-list__icon"><i class="fa fa-tasks" aria-hidden="true"></i> </span>Parallax</a></li>
                                                        <li class="dd-effect"><a href="parallax-video.html"><span class="brk-header-list__icon"><i class="fa fa-sign-language" aria-hidden="true"></i> </span>Parallax video</a></li>
                                                        <li class="dd-effect"><a href="pricing-tables.html"><span class="brk-header-list__icon"><i class="fa fa-qrcode" aria-hidden="true"></i> </span>Pricing tables</a></li>
                                                        <li class="dd-effect"><a href="progress-circles.html"><span class="brk-header-list__icon"><i class="fa fa-university" aria-hidden="true"></i> </span>Progress circles</a></li>
                                                        <li class="dd-effect"><a href="promo.html"><span class="brk-header-list__icon"><i class="fa fa-id-card" aria-hidden="true"></i> </span>Promo</a></li>
                                                        <li class="dd-effect"><a href="section-titles.html"><span class="brk-header-list__icon"><i class="fa fa-cube" aria-hidden="true"></i> </span>Section titles</a></li>
                                                        <li class="dd-effect"><a href="sequence.html"><span class="brk-header-list__icon"><i class="far fa-gem" aria-hidden="true"></i> </span>Sequence</a></li>
                                                        <li class="dd-effect"><a href="services.html"><span class="brk-header-list__icon"><i class="fa fa-id-card" aria-hidden="true"></i> </span>Services</a></li>
                                                        <li class="dd-effect"><a href="shape-box.html"><span class="brk-header-list__icon"><i class="fa fa-male" aria-hidden="true"></i> </span>Shape box</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-4">
                                                <div class="brk-nav__header font__family-montserrat">ELEMENTS</div>
                                                <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                    <ul class="brk-header-list font__family-montserrat">
                                                        <li class="dd-effect"><a href="sliders.html"><span class="brk-header-list__icon"><i class="fa fa-male" aria-hidden="true"></i> </span>Sliders</a></li>
                                                        <li class="dd-effect"><a href="social.html"><span class="brk-header-list__icon"><i class="fa fa-id-card" aria-hidden="true"></i> </span>Social</a></li>
                                                        <li class="dd-effect"><a href="steps.html"><span class="brk-header-list__icon"><i class="fa fa-cube" aria-hidden="true"></i> </span>Steps</a></li>
                                                        <li class="dd-effect"><a href="tabbed-contents.html"><span class="brk-header-list__icon"><i class="fa fa-sign-language" aria-hidden="true"></i> </span>Tabbed contents</a></li>
                                                        <li class="dd-effect"><a href="tables.html"><span class="brk-header-list__icon"><i class="fa fa-qrcode" aria-hidden="true"></i> </span>Tables</a></li>
                                                        <li class="dd-effect"><a href="tabs.html"><span class="brk-header-list__icon"><i class="far fa-gem" aria-hidden="true"></i> </span>Tabs</a></li>
                                                        <li class="dd-effect"><a href="tags.html"><span class="brk-header-list__icon"><i class="fa fa-tasks" aria-hidden="true"></i> </span>Tags</a></li>
                                                        <li class="dd-effect"><a href="team.html"><span class="brk-header-list__icon"><i class="fa fa-university" aria-hidden="true"></i> </span>Team</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-4">
                                                <div class="brk-nav__header font__family-montserrat">ELEMENTS</div>
                                                <div class="brk-header_border-right pt-lg-20 pb-lg-30 pb-10 brk-header_h-100">
                                                    <ul class="brk-header-list font__family-montserrat">
                                                        <li class="dd-effect"><a href="team-member.html"><span class="brk-header-list__icon"><i class="fa fa-tasks" aria-hidden="true"></i> </span>Team-member</a></li>
                                                        <li class="dd-effect"><a href="testimonials.html"><span class="brk-header-list__icon"><i class="fa fa-university" aria-hidden="true"></i> </span>Testimonials</a></li>
                                                        <li class="dd-effect"><a href="tiles.html"><span class="brk-header-list__icon"><i class="fa fa-male" aria-hidden="true"></i> </span>Tiles</a></li>
                                                        <li class="dd-effect"><a href="timelines.html"><span class="brk-header-list__icon"><i class="fa fa-life-ring" aria-hidden="true"></i> </span>Timelines</a></li>
                                                        <li class="dd-effect"><a href="titles.html"><span class="brk-header-list__icon"><i class="fa fa-id-card" aria-hidden="true"></i> </span>Titles</a></li>
                                                        <li class="dd-effect"><a href="typing-rotator.html"><span class="brk-header-list__icon"><i class="fab fa-adversal" aria-hidden="true"></i> </span>Typing rotator</a></li>
                                                        <li class="dd-effect"><a href="svg-pattern.html"><span class="brk-header-list__icon"><i class="fab fa-adversal" aria-hidden="true"></i> </span>Blocks transition</a></li>
                                                        <li class="dd-effect"><a href="panels.html"><span class="brk-header-list__icon"><i class="fa fa-male" aria-hidden="true"></i> </span>Panels</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 align-self-lg-center d-none d-lg-block">
                    <div class="text-center"><a href="/" class="brk-header__logo brk-header__item @@modifier"><img class="brk-header__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/logo-dark.svg" alt="alt"> <img class="brk-header__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/logo-dark.svg" alt="alt"></a></div>
                </div>
                <div class="col-lg-5 align-self-lg-stretch text-lg-right">
                    <div class="brk-header__title font__family-montserrat font__weight-bold">Menu Extra</div>
                    <div class="brk-call-us brk-header__item"><a href="tel:88001234567" class="brk-call-us__number"><i class="fa fa-phone" aria-hidden="true"></i> 8 800 12 34 567</a> <a href="tel:88001234567" class="brk-call-us__link"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
                    <div class="brk-lang brk-header__item"><span class="brk-lang__selected">US <i class="fa fa-caret-down" aria-hidden="true"></i></span> <span class="brk-lang__open"><i class="fa fa-language"></i> Language <span class="brk-lang__active-lang text-white brk-bg-primary">US</span></span>
                        <ul class="brk-lang__option">
                            <li><a href="#">UA</a></li>
                            <li><a href="#">US</a></li>
                            <li><a href="#">PL</a></li>
                            <li><a href="#">ES</a></li>
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
                    <div class="brk-user brk-header__item">
                        <div class="brk-user__open"><i class="fa fa-user"></i>
                            <div class="brk-user__title">User Menu</div>
                        </div>
                        <div class="brk-user__block">
                            <div class="brk-user__header"><span
                                        class="font__family-montserrat font__weight-bold font__size-18">User Menu</span>
                            </div>
                            <div class="brk-user__content">
                                <div>
                                    <ul>
                                        <li>@Ahmad</li>
                                        <li>Profile</li>
                                        <li>Logout</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div id="top"></div>
    <div id="rev_slider_48_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="demo_magazine" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:72px;margin-bottom:0px;">
        <div id="rev_slider_48_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <li data-index="rs-191" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="img/demo_magazine/revslider_img/100x50_3890e-1290x1080_1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide #1" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""><img src="img/demo_magazine/revslider_img/3890e-1290x1080_1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina="">
                    <div class="tp-caption rev_group" id="slide-191-layer-10" data-x="[&apos;right&apos;,&apos;right&apos;,&apos;right&apos;,&apos;right&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="384" data-height="320" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="group" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 384px; max-width: 384px; max-width: 320px; max-width: 320px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-191-layer-2" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="384" data-height="319" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(255,255,255,0);border-color:rgba(255,255,255,0.16);border-style:solid;border-width:0px 0px 1px 1px;"></div>
                        <div class="tp-caption" id="slide-191-layer-3" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;50&apos;,&apos;50&apos;,&apos;50&apos;,&apos;50&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[14,14,14,14]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[14,14,14,14]" style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 22px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;background-color:rgb(208,160,94);border-radius:12px 12px 12px 12px;">Men&#x2019;s News</div>
                        <div class="tp-caption" id="slide-191-layer-4" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;100&apos;,&apos;100&apos;,&apos;100&apos;,&apos;100&apos;]" data-width="305" data-height="57" data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 305px; max-width: 305px; max-width: 57px; max-width: 57px; white-space: normal; font-size: 24px; line-height: 28px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Finding inspiration for writing</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-5" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;169&apos;,&apos;169&apos;,&apos;169&apos;,&apos;169&apos;]" data-width="269" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; min-width: 269px; max-width: 269px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 400; color: rgba(255,255,255,0.5); letter-spacing: 0px;font-family:Playfair Display;">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-7" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;262&apos;,&apos;262&apos;,&apos;262&apos;,&apos;262&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><i class="fa-icon-clock-o"></i></div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-6" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;63&apos;,&apos;63&apos;,&apos;63&apos;,&apos;63&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;262&apos;,&apos;262&apos;,&apos;262&apos;,&apos;262&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">11 minutes ago</div>
                    </div>
                    <div class="tp-caption rev_group" id="slide-191-layer-12" data-x="[&apos;right&apos;,&apos;right&apos;,&apos;right&apos;,&apos;right&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;320&apos;,&apos;320&apos;,&apos;320&apos;,&apos;320&apos;]" data-width="384" data-height="320" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="group" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:800,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 384px; max-width: 384px; max-width: 320px; max-width: 320px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-191-layer-13" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="384" data-height="320" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(255,255,255,0);">
                            <div class="tp-element-background" style="background: url(&apos;img/demo_magazine/revslider_img/ddad8-384x320_1.jpg&apos;) no-repeat center center; background-size: cover; opacity: 1;"></div>
                        </div>
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-191-layer-19" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="384" data-height="320" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(255,255,255,0.9);"></div>
                        <div class="tp-caption" id="slide-191-layer-14" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;50&apos;,&apos;50&apos;,&apos;50&apos;,&apos;50&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[14,14,14,14]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[14,14,14,14]" style="z-index: 16; white-space: nowrap; font-size: 14px; line-height: 22px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;background-color:rgb(208,160,94);border-radius:12px 12px 12px 12px;">Men&#x2019;s News</div>
                        <div class="tp-caption" id="slide-191-layer-15" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;100&apos;,&apos;100&apos;,&apos;100&apos;,&apos;100&apos;]" data-width="305" data-height="57" data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17; min-width: 305px; max-width: 305px; max-width: 57px; max-width: 57px; white-space: normal; font-size: 24px; line-height: 28px; font-weight: 700; color: #2b2c2d; letter-spacing: 0px;font-family:Montserrat;">Finding inspiration for writing</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-16" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;169&apos;,&apos;169&apos;,&apos;169&apos;,&apos;169&apos;]" data-width="269" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18; min-width: 269px; max-width: 269px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 400; color: rgba(43,44,45,0.5); letter-spacing: 0px;font-family:Playfair Display;">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-17" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;63&apos;,&apos;63&apos;,&apos;63&apos;,&apos;63&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;262&apos;,&apos;262&apos;,&apos;262&apos;,&apos;262&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #2b2c2d; letter-spacing: 0px;font-family:Montserrat;">11 minutes ago</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-18" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;262&apos;,&apos;262&apos;,&apos;262&apos;,&apos;262&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: #2b2c2d; letter-spacing: 0px;font-family:Open Sans;"><i class="fa-icon-clock-o"></i></div>
                    </div>
                    <div class="tp-caption rev_group" id="slide-191-layer-21" data-x="[&apos;right&apos;,&apos;right&apos;,&apos;right&apos;,&apos;right&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;640&apos;,&apos;640&apos;,&apos;640&apos;,&apos;640&apos;]" data-width="384" data-height="320" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;off&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="group" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:1600,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 21; min-width: 384px; max-width: 384px; max-width: 320px; max-width: 320px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-191-layer-22" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="384" data-height="320" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 22;background-color:rgba(255,255,255,0);">
                            <div class="tp-element-background" style="background: url(&apos;img/demo_magazine/revslider_img/72622-384x320_2.jpg&apos;) no-repeat center center; background-size: cover; opacity: 1;"></div>
                        </div>
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-191-layer-23" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="384" data-height="320" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 23;background-color:rgba(208,160,94,0.9);"></div>
                        <div class="tp-caption" id="slide-191-layer-24" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;50&apos;,&apos;50&apos;,&apos;50&apos;,&apos;50&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[14,14,14,14]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[14,14,14,14]" style="z-index: 24; white-space: nowrap; font-size: 14px; line-height: 22px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;background-color:rgb(0,0,0);border-radius:12px 12px 12px 12px;">Men&#x2019;s News</div>
                        <div class="tp-caption" id="slide-191-layer-25" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;100&apos;,&apos;100&apos;,&apos;100&apos;,&apos;100&apos;]" data-width="305" data-height="57" data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 25; min-width: 305px; max-width: 305px; max-width: 57px; max-width: 57px; white-space: normal; font-size: 24px; line-height: 28px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Finding inspiration for writing</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-26" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;169&apos;,&apos;169&apos;,&apos;169&apos;,&apos;169&apos;]" data-width="269" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 26; min-width: 269px; max-width: 269px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 400; color: rgba(255,255,255,0.5); letter-spacing: 0px;font-family:Playfair Display;">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-27" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;63&apos;,&apos;63&apos;,&apos;63&apos;,&apos;63&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;262&apos;,&apos;262&apos;,&apos;262&apos;,&apos;262&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 27; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">11 minutes ago</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-28" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;40&apos;,&apos;40&apos;,&apos;40&apos;,&apos;40&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;263&apos;,&apos;263&apos;,&apos;263&apos;,&apos;263&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 28; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><i class="fa-icon-clock-o"></i></div>
                    </div>
                    <div class="tp-caption rev_group rs-parallaxlevel-6" id="slide-191-layer-30" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;178&apos;,&apos;80&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;bottom&apos;,&apos;bottom&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;200&apos;,&apos;100&apos;,&apos;150&apos;,&apos;150&apos;]" data-width="[&apos;655&apos;,&apos;465&apos;,&apos;655&apos;,&apos;556&apos;]" data-height="[&apos;249&apos;,&apos;248&apos;,&apos;249&apos;,&apos;247&apos;]" data-whitespace="nowrap" data-type="group" data-basealign="slide" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 29; min-width: 655px; max-width: 655px; max-width: 249px; max-width: 249px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <div class="tp-caption" id="slide-191-layer-29" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[14,14,14,14]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[14,14,14,14]" style="z-index: 30; white-space: nowrap; font-size: 14px; line-height: 22px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;background-color:rgb(208,160,94);border-radius:12px 12px 12px 12px;">Men&#x2019;s News</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-31" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;46&apos;,&apos;46&apos;,&apos;46&apos;,&apos;46&apos;]" data-fontsize="[&apos;36&apos;,&apos;28&apos;,&apos;36&apos;,&apos;28&apos;]" data-lineheight="[&apos;42&apos;,&apos;34&apos;,&apos;42&apos;,&apos;34&apos;]" data-width="[&apos;577&apos;,&apos;442&apos;,&apos;577&apos;,&apos;500&apos;]" data-height="[&apos;85&apos;,&apos;86&apos;,&apos;85&apos;,&apos;none&apos;]" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;center&apos;,&apos;center&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 31; min-width: 577px; max-width: 577px; max-width: 85px; max-width: 85px; white-space: normal; font-size: 36px; line-height: 42px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">How to find the time to write on twitter</div>
                        <div class="tp-caption" id="slide-191-layer-32" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;139&apos;,&apos;139&apos;,&apos;139&apos;,&apos;126&apos;]" data-fontsize="[&apos;18&apos;,&apos;17&apos;,&apos;18&apos;,&apos;16&apos;]" data-lineheight="[&apos;24&apos;,&apos;22&apos;,&apos;24&apos;,&apos;20&apos;]" data-width="[&apos;503&apos;,&apos;381&apos;,&apos;503&apos;,&apos;500&apos;]" data-height="[&apos;49&apos;,&apos;50&apos;,&apos;49&apos;,&apos;none&apos;]" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;center&apos;,&apos;center&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 32; min-width: 503px; max-width: 503px; max-width: 49px; max-width: 49px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 400; color: rgba(255,255,255,0.5); letter-spacing: 0px;font-family:Playfair Display;">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-33" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;-68&apos;,&apos;-68&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;207&apos;,&apos;207&apos;,&apos;207&apos;,&apos;207&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 33; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><i class="fa-icon-clock-o"></i></div>
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-34" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;23&apos;,&apos;23&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;207&apos;,&apos;207&apos;,&apos;207&apos;,&apos;207&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 34; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">11 minutes ago</div>
                    </div>
                    <div class="tp-caption rev_group rs-parallaxlevel-6" id="slide-191-layer-41" data-x="[&apos;right&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;400&apos;,&apos;80&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;bottom&apos;,&apos;top&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;200&apos;,&apos;100&apos;,&apos;70&apos;,&apos;130&apos;]" data-width="193" data-height="100" data-whitespace="nowrap" data-type="group" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:1300,&quot;speed&quot;:1400,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 35; min-width: 193px; max-width: 193px; max-width: 100px; max-width: 100px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <div class="tp-caption tp-resizeme" id="slide-191-layer-43" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[24,24,24,24]" data-paddingright="[24,24,24,24]" data-paddingbottom="[24,24,24,24]" data-paddingleft="[27,27,27,27]" style="z-index: 36; white-space: nowrap; font-size: 16px; line-height: 16px; font-weight: 400; color: #d0a05e; letter-spacing: 0px;font-family:Open Sans;background-color:rgb(255,255,255);border-radius:40px 40px 40px 40px;"><i class="fa-icon-play"></i></div>
                        <div class="tp-caption" id="slide-191-layer-44" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;79&apos;,&apos;79&apos;,&apos;79&apos;,&apos;79&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 37; white-space: nowrap; font-size: 14px; line-height: 16px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;text-transform:uppercase;">Watch<br>the video</div>
                    </div>
                    <div class="tp-caption rev-brk-brands rev_group" id="slide-191-layer-58" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;1&apos;,&apos;1&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;-4&apos;,&apos;-4&apos;]" data-width="68" data-height="210" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;on&apos;,&apos;off&apos;]" data-type="group" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 39; min-width: 68px; max-width: 68px; max-width: 210px; max-width: 210px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <div class="tp-caption rev-brk-social" id="slide-191-layer-56" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="text" data-actions="" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:rgb(208,160,94);&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 40; white-space: nowrap; font-size: 13px; line-height: 13px; font-weight: 400; color: rgba(255,255,255,0.2); letter-spacing: 0px;font-family:Open Sans;background-color:rgba(208,160,94,0);border-radius:40px 40px 40px 40px;cursor:pointer;"><i class="fa-icon-twitter"></i></div>
                        <div class="tp-caption rev-brk-social" id="slide-191-layer-47" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;18&apos;,&apos;18&apos;]" data-y="[&apos;bottom&apos;,&apos;bottom&apos;,&apos;bottom&apos;,&apos;bottom&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:rgb(208,160,94);&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 41; white-space: nowrap; font-size: 13px; line-height: 13px; font-weight: 400; color: rgba(255,255,255,0.2); letter-spacing: 0px;font-family:Open Sans;background-color:rgba(208,160,94,0);border-radius:40px 40px 40px 40px;cursor:pointer;"><i class="fa-icon-vk"></i></div>
                        <div class="tp-caption rev-brk-social" id="slide-191-layer-54" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;bottom&apos;,&apos;bottom&apos;]" data-voffset="[&apos;35&apos;,&apos;35&apos;,&apos;141&apos;,&apos;141&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:rgb(208,160,94);&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 42; white-space: nowrap; font-size: 13px; line-height: 13px; font-weight: 400; color: rgba(255,255,255,0.2); letter-spacing: 0px;font-family:Open Sans;background-color:rgba(208,160,94,0);border-radius:40px 40px 40px 40px;cursor:pointer;"><i class="fa-icon-instagram"></i></div>
                        <div class="tp-caption rev-brk-social" id="slide-191-layer-52" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;bottom&apos;,&apos;bottom&apos;]" data-voffset="[&apos;70&apos;,&apos;70&apos;,&apos;106&apos;,&apos;106&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:rgb(208,160,94);&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 43; white-space: nowrap; font-size: 13px; line-height: 13px; font-weight: 400; color: rgba(255,255,255,0.2); letter-spacing: 0px;font-family:Open Sans;background-color:rgba(208,160,94,0);border-radius:40px 40px 40px 40px;cursor:pointer;"><i class="fa-icon-google"></i></div>
                        <div class="tp-caption rev-brk-social" id="slide-191-layer-50" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;bottom&apos;,&apos;bottom&apos;]" data-voffset="[&apos;105&apos;,&apos;105&apos;,&apos;70&apos;,&apos;70&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:rgb(208,160,94);&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 44; white-space: nowrap; font-size: 13px; line-height: 13px; font-weight: 400; color: rgba(255,255,255,0.2); letter-spacing: 0px;font-family:Open Sans;background-color:rgba(208,160,94,0);border-radius:40px 40px 40px 40px;cursor:pointer;"><i class="fa-icon-youtube"></i></div>
                        <div class="tp-caption rev-brk-social" id="slide-191-layer-48" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;16&apos;,&apos;16&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;bottom&apos;,&apos;bottom&apos;]" data-voffset="[&apos;140&apos;,&apos;140&apos;,&apos;35&apos;,&apos;35&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="text" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;300&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:rgb(208,160,94);&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 45; white-space: nowrap; font-size: 13px; line-height: 13px; font-weight: 400; color: rgba(255,255,255,0.2); letter-spacing: 0px;font-family:Open Sans;background-color:rgba(208,160,94,0);border-radius:40px 40px 40px 40px;cursor:pointer;"><i class="fa-icon-vimeo"></i></div>
                    </div>
                    <div class="tp-caption tp-shape tp-shapewrapper" id="slide-191-layer-1" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0,0,0,0.7);"></div>
                    <div class="tp-caption tp-shape tp-shapewrapper" id="slide-191-layer-45" data-x="[&apos;left&apos;,&apos;left&apos;,&apos;left&apos;,&apos;left&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="68" data-height="full" data-whitespace="nowrap" data-visibility="[&apos;on&apos;,&apos;on&apos;,&apos;off&apos;,&apos;off&apos;]" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 38;background-color:rgb(43,44,45);"></div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <h1 class="sr-only">Magazine - Home</h1>
    <section class="row no-gutters">
        <div class="col-xl-4">
            <div class="blog-grid-card lazyload blog-grid-card_small blog-grid-card_white" data-bg="img/demo_magazine/640x420_1.jpg" data-brk-library="component__blog_grid">
                <div class="blog-grid-card__before"></div>
                <div class="blog-grid-card__item text-center"><a href="#" class="blog-grid-card__avatar"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/116x116_6.jpg" alt="alt" class="lazyload"> </a><a href="#" class="blog-grid-card__name font__family-montserrat font__weight-bold font__size-14 line__height-16">Nekro Merinstar</a> <a href="#" class="blog-grid-card__title font__family-montserrat font__weight-bold">Stay on budget</a>
                    <div class="blog-grid-card__desc font__family-playfair">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                    <div class="d-flex justify-content-center flex-wrap"><a href="#" class="blog-grid-card__cat font__family-montserrat font__weight-bold font__size-14 line__height-22">Men&#x2019;s News</a>
                        <div class="blog-grid-card__time font__family-montserrat font__weight-bold font__size-14 line__height-22"><i class="far fa-clock"></i> 11 minutes ago</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="blog-grid-card lazyload blog-grid-card_small blog-grid-card_dark" data-bg="img/demo_magazine/640x420_2.jpg" data-brk-library="component__blog_grid">
                <div class="blog-grid-card__before"></div>
                <div class="blog-grid-card__item text-center"><a href="#" class="blog-grid-card__avatar"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/116x116_7.jpg" alt="alt" class="lazyload"> </a><a href="#" class="blog-grid-card__name font__family-montserrat font__weight-bold font__size-14 line__height-16">Nekro Merinstar</a> <a href="#" class="blog-grid-card__title font__family-montserrat font__weight-bold">Finding inspiration for writing</a>
                    <div class="blog-grid-card__desc font__family-playfair">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                    <div class="d-flex justify-content-center flex-wrap"><a href="#" class="blog-grid-card__cat font__family-montserrat font__weight-bold font__size-14 line__height-22">Men&#x2019;s News</a>
                        <div class="blog-grid-card__time font__family-montserrat font__weight-bold font__size-14 line__height-22"><i class="far fa-clock"></i> 11 minutes ago</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="blog-grid-card lazyload blog-grid-card_small blog-grid-card_white" data-bg="img/demo_magazine/640x420_3.jpg" data-brk-library="component__blog_grid">
                <div class="blog-grid-card__before"></div>
                <div class="blog-grid-card__item text-center"><a href="#" class="blog-grid-card__avatar"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/116x116_3.jpg" alt="alt" class="lazyload"> </a><a href="#" class="blog-grid-card__name font__family-montserrat font__weight-bold font__size-14 line__height-16">Nekro Merinstar</a> <a href="#" class="blog-grid-card__title font__family-montserrat font__weight-bold">Wrap up the project</a>
                    <div class="blog-grid-card__desc font__family-playfair">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                    <div class="d-flex justify-content-center flex-wrap"><a href="#" class="blog-grid-card__cat font__family-montserrat font__weight-bold font__size-14 line__height-22">Men&#x2019;s News</a>
                        <div class="blog-grid-card__time font__family-montserrat font__weight-bold font__size-14 line__height-22"><i class="far fa-clock"></i> 11 minutes ago</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="blog-grid-card lazyload blog-grid-card_small blog-grid-card_dark" data-bg="img/demo_magazine/640x420_2.jpg" data-brk-library="component__blog_grid">
                        <div class="blog-grid-card__before"></div>
                        <div class="blog-grid-card__item text-center"><a href="#" class="blog-grid-card__avatar"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/116x116_4.jpg" alt="alt" class="lazyload"> </a><a href="#" class="blog-grid-card__name font__family-montserrat font__weight-bold font__size-14 line__height-16">Nekro Merinstar</a> <a href="#" class="blog-grid-card__title font__family-montserrat font__weight-bold">According to schedule</a>
                            <div class="blog-grid-card__desc font__family-playfair">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                            <div class="d-flex justify-content-center flex-wrap"><a href="#" class="blog-grid-card__cat font__family-montserrat font__weight-bold font__size-14 line__height-22">Men&#x2019;s News</a>
                                <div class="blog-grid-card__time font__family-montserrat font__weight-bold font__size-14 line__height-22"><i class="far fa-clock"></i> 11 minutes ago</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-grid-card lazyload blog-grid-card_small blog-grid-card_white" data-bg="img/demo_magazine/640x420_4.jpg" data-brk-library="component__blog_grid">
                        <div class="blog-grid-card__before"></div>
                        <div class="blog-grid-card__item text-center"><a href="#" class="blog-grid-card__avatar"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/116x116_5.jpg" alt="alt" class="lazyload"> </a><a href="#" class="blog-grid-card__name font__family-montserrat font__weight-bold font__size-14 line__height-16">Nekro Merinstar</a> <a href="#" class="blog-grid-card__title font__family-montserrat font__weight-bold">Schedule a meeting</a>
                            <div class="blog-grid-card__desc font__family-playfair">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                            <div class="d-flex justify-content-center flex-wrap"><a href="#" class="blog-grid-card__cat font__family-montserrat font__weight-bold font__size-14 line__height-22">Men&#x2019;s News</a>
                                <div class="blog-grid-card__time font__family-montserrat font__weight-bold font__size-14 line__height-22"><i class="far fa-clock"></i> 11 minutes ago</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="blog-grid-card lazyload blog-grid-card_small blog-grid-card_colored" data-bg="img/demo_magazine/1280x420_1.jpg" data-brk-library="component__blog_grid">
                        <div class="blog-grid-card__before"></div>
                        <div class="blog-grid-card__item text-center"><a href="#" class="blog-grid-card__avatar"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/116x116_3.jpg" alt="alt" class="lazyload"> </a><a href="#" class="blog-grid-card__name font__family-montserrat font__weight-bold font__size-14 line__height-16">Nekro Merinstar</a> <a href="#" class="blog-grid-card__title font__family-montserrat font__weight-bold">Give the green light</a>
                            <div class="blog-grid-card__desc font__family-playfair">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                            <div class="d-flex justify-content-center flex-wrap"><a href="#" class="blog-grid-card__cat font__family-montserrat font__weight-bold font__size-14 line__height-22">Men&#x2019;s News</a>
                                <div class="blog-grid-card__time font__family-montserrat font__weight-bold font__size-14 line__height-22"><i class="far fa-clock"></i> 11 minutes ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="blog-grid-card lazyload blog-grid-card_big blog-grid-card_dark" data-bg="img/demo_magazine/640x840_1.jpg" data-brk-library="component__blog_grid">
                <div class="blog-grid-card__before"></div>
                <div class="blog-grid-card__item text-center"><a href="#" class="blog-grid-card__avatar"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/116x116_6.jpg" alt="alt" class="lazyload"> </a><a href="#" class="blog-grid-card__name font__family-montserrat font__weight-bold font__size-14 line__height-16">Nekro Merinstar</a> <a href="#" class="blog-grid-card__title font__family-montserrat font__weight-bold">Start from scratch</a>
                    <div class="blog-grid-card__desc font__family-playfair">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</div>
                    <div class="d-flex justify-content-center flex-wrap"><a href="#" class="blog-grid-card__cat font__family-montserrat font__weight-bold font__size-14 line__height-22">Men&#x2019;s News</a>
                        <div class="blog-grid-card__time font__family-montserrat font__weight-bold font__size-14 line__height-22"><i class="far fa-clock"></i> 11 minutes ago</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brk-bg-light-dark-2 bg-cover bg-norepeat bg-position_bottom-center pt-90 pb-lg-110 pb-70" style="background-image:url(img/demo_magazine/1920x908_1.png);">
        <div class="container">
            <div class="font__size-46 line__height-60 text-center mb-90"><span class="font__family-playfair font__style-italic">Check Our</span> <span class="font__family-montserrat font__weight-bold">Photos</span></div>
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_1.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_1.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_2.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_2.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_3.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_3.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_4.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_4.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_5.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_5.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_6.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_6.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_7.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_7.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_8.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_8.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_9.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_9.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_10.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_10.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_11.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_11.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="brk-gallery-card brk-gallery-card_shadow" data-brk-library="component__gallery"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/270x270_12.jpg" alt="alt" class="brk-gallery-card__img lazyload"> <a href="img/demo_magazine/270x270_12.jpg" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center"><i class="fas fa-plus font__size-36 brk-white-font-color"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative brk-bg-primary pt-30 pb-30">
        <div class="brk-layer position-absolute bg-cover bg-norepeat bg-position_bottom-center opacity-20 lazyload" data-bg="img/demo_magazine/1280x120_1.png"></div>
        <div class="container position-relative brk-z-index-10 text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-auto"><span class="font__weight-bold font__family-montserrat font__size-32 line__height-52 text-white text-uppercase">View our shop</span> <span class="font__weight-light font__family-montserrat font__size-32 line__height-52 text-white text-uppercase">&amp; buy our best products</span></div>
                <div class="col-md-auto"><a href="#" class="btn btn-inside-out btn-lg btn-icon border-radius-30 btn-inside-out_dark font__family-open-sans font__weight-bold m-0" data-brk-library="component__button"><i class="fas fa-shopping-basket icon-inside"></i> <span class="before">shop now</span><span class="text">shop now</span><span class="after">shop now</span></a></div>
            </div>
        </div>
    </section>
    <section class="brk-base-bg-6 pt-lg-110 pt-40 pb-90">
        <div class="container">
            <div class="row align-items-end brk-gutters-5">
                <div class="col-lg-auto text-center text-lg-left"><span class="brk-text-clip bg-cover font__weight-bold magazine-big-font">136</span></div>
                <div class="col-lg-auto text-center text-lg-left">
                    <div class="font__family-montserrat font__weight-bold font__size-24 line__height-28 mb-20 text-uppercase"><span class="brk-base-font-color">Partners</span><br><span class="text-white">with us</span></div>
                </div>
                <div class="col-md-auto text-center text-lg-left brk-align-right"><a href="#" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-bold m-0 mb-20" data-brk-library="component__button"><i class="fas fa-user icon-inside"></i> <span class="before">Become our Partner</span><span class="text">Become our Partner</span><span class="after">Become our Partner</span></a></div>
            </div>
            <div class="row pt-70">
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
                <div class="col-lg-3 col-sm-6 pt-15 pb-15"><a href="#" class="logo-set-dark" data-brk-library="component__widgets"><img class="logo-set-dark__img lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo-logo-set.png" alt="alt"></a></div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row pt-15 pb-15 align-items-center">
            <div class="col-xl offset-xl-1">
                <div class="text-center text-xl-left mt-40 mb-40 mt-xl-0 mb-xl-0">
                    <div class="font__family-montserrat font__weight-bold text-uppercase font__size-36 line__height-42 mb-30">Our Team</div>
                    <div class="font__family-montserrat font__family-playfair font__size-18 line__height-24 brk-dark-font-color mb-35">Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc. Vestibulum fringilla pede sit amet augue.</div><a href="#" class="btn btn-inside-out btn-lg btn-icon border-radius-30 font__family-open-sans font__weight-bold m-0 mb-20" data-brk-library="component__button"><i class="fab fa-linkedin-in icon-inside"></i> <span class="before">Our Linkedin</span><span class="text">Open Linkedin</span><span class="after">Our Linkedin</span></a>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="brk-team-strict lazyload" data-bg="img/demo_magazine/270x414_1.jpg" data-brk-library="component__team"><a href="#">
                        <h3 class="brk-team-strict__name font__family-montserrat font__weight-semibold font__size-21">Leana K.A</h3>
                    </a>
                    <div class="brk-team-strict__social"><a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> <a href="#"><i class="fab fa-youtube"></i></a> <a href="#"><i class="fab fa-vimeo-v"></i></a></div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="brk-team-strict lazyload" data-bg="img/demo_magazine/270x414_2.jpg" data-brk-library="component__team"><a href="#">
                        <h3 class="brk-team-strict__name font__family-montserrat font__weight-semibold font__size-21">Samanta J.D</h3>
                    </a>
                    <div class="brk-team-strict__social"><a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> <a href="#"><i class="fab fa-youtube"></i></a> <a href="#"><i class="fab fa-vimeo-v"></i></a></div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="brk-team-strict lazyload" data-bg="img/demo_magazine/270x414_3.jpg" data-brk-library="component__team"><a href="#">
                        <h3 class="brk-team-strict__name font__family-montserrat font__weight-semibold font__size-21">Marry W.S</h3>
                    </a>
                    <div class="brk-team-strict__social"><a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> <a href="#"><i class="fab fa-youtube"></i></a> <a href="#"><i class="fab fa-vimeo-v"></i></a></div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="brk-team-strict lazyload" data-bg="img/demo_magazine/270x414_4.jpg" data-brk-library="component__team"><a href="#">
                        <h3 class="brk-team-strict__name font__family-montserrat font__weight-semibold font__size-21">Gerar Q.W</h3>
                    </a>
                    <div class="brk-team-strict__social"><a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> <a href="#"><i class="fab fa-youtube"></i></a> <a href="#"><i class="fab fa-vimeo-v"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="brk-base-bg-6 pt-lg-100 pt-50 pb-lg-80">
        <div class="font__size-46 line__height-60 text-center mb-lg-90 pb-50 text-white"><span class="font__family-playfair font__style-italic">Our</span> <span class="font__family-montserrat font__weight-bold text-uppercase">History</span></div>
        <div class="filmstrip-slider timeline timeline--masonry timeline--masonry_white" data-brk-library="component__timelines_css,slider__swiper">
            <div class="filmstrip-slider-container swiper-container">
                <div class="swiper-wrapper">
                    <div class="post-filmstrip swiper-slide" data-caption="Feb, 2008">
                        <div class="timeline__item">
                            <div class="timeline__content text-left brk-dark-font-color">
                                <div class="timeline__date">
                                    <div class="timeline__date-year font__family-montserrat font__size-19 font-weight-bold brk-black-font-color line__height-40">Feb, 2008</div>
                                </div>
                                <p class="mt-20 brk-dark-font-color font__family-roboto font__weight-light font__size-15 letter-spacing--1 line__height-26">Aenean vulputate eleifend tellusnean leo ligula, porttitor eu, sequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis.</p>
                            </div><img class="mt-30 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/timeline/timeline_content_06.jpg" alt="alt">
                        </div>
                    </div>
                    <div class="post-filmstrip swiper-slide" data-caption="Apr, 2009">
                        <div class="timeline__item">
                            <div class="timeline__content text-left brk-dark-font-color">
                                <div class="timeline__date">
                                    <div class="timeline__date-year font__family-montserrat font__size-19 font-weight-bold brk-black-font-color line__height-40">Apr, 2009</div>
                                </div>
                                <p class="mt-20 brk-dark-font-color font__family-roboto font__weight-light font__size-15 letter-spacing--1 line__height-26">Aenean vulputate eleifend tellusnean leo ligula, porttitor eu, sequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                            </div><img class="mt-30 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/timeline/timeline_content_07.jpg" alt="alt">
                        </div>
                    </div>
                    <div class="post-filmstrip swiper-slide" data-caption="Jul, 2011">
                        <div class="timeline__item">
                            <div class="timeline__content text-left brk-dark-font-color">
                                <div class="timeline__date">
                                    <div class="timeline__date-year font__family-montserrat font__size-19 font-weight-bold brk-black-font-color line__height-40">Jul, 2011</div>
                                </div>
                                <p class="mt-20 brk-dark-font-color font__family-roboto font__weight-light font__size-15 letter-spacing--1 line__height-26">Aenean vulputate eleifend tellusnean leo ligula, porttitor eu, sequat vitae, eleifend ac, enim.</p>
                            </div><img class="mt-30 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/timeline/timeline_content_08.jpg" alt="alt">
                        </div>
                    </div>
                    <div class="post-filmstrip swiper-slide" data-caption="Dec, 2013">
                        <div class="timeline__item">
                            <div class="timeline__content text-left brk-dark-font-color">
                                <div class="timeline__date">
                                    <div class="timeline__date-year font__family-montserrat font__size-19 font-weight-bold brk-black-font-color line__height-40">Dec, 2013</div>
                                </div>
                                <p class="mt-20 brk-dark-font-color font__family-roboto font__weight-light font__size-15 letter-spacing--1 line__height-26">Aenean vulputate eleifend tellusnean leo ligula, porttitor eu, sequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                            </div><img class="mt-30 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/timeline/timeline_content_09.jpg" alt="alt">
                        </div>
                    </div>
                    <div class="post-filmstrip swiper-slide" data-caption="Jan, 2014">
                        <div class="timeline__item">
                            <div class="timeline__content text-left brk-dark-font-color">
                                <div class="timeline__date">
                                    <div class="timeline__date-year font__family-montserrat font__size-19 font-weight-bold brk-black-font-color line__height-40">Jan, 2014</div>
                                </div>
                                <p class="mt-20 brk-dark-font-color font__family-roboto font__weight-light font__size-15 letter-spacing--1 line__height-26">Aenean vulputate eleifend tellusnean leo ligula, porttitor eu, sequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis.</p>
                            </div><img class="mt-30 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/timeline/timeline_content_06.jpg" alt="alt">
                        </div>
                    </div>
                    <div class="post-filmstrip swiper-slide" data-caption="Nov,2017">
                        <div class="timeline__item">
                            <div class="timeline__content text-left brk-dark-font-color">
                                <div class="timeline__date">
                                    <div class="timeline__date-year font__family-montserrat font__size-19 font-weight-bold brk-black-font-color line__height-40">Nov,2017</div>
                                </div>
                                <p class="mt-20 brk-dark-font-color font__family-roboto font__weight-light font__size-15 letter-spacing--1 line__height-26">Aenean vulputate eleifend tellusnean leo ligula, porttitor eu, sequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                            </div><img class="mt-30 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/timeline/timeline_content_07.jpg" alt="alt">
                        </div>
                    </div>
                    <div class="post-filmstrip swiper-slide" data-caption="Aug, 2018">
                        <div class="timeline__item">
                            <div class="timeline__content text-left brk-dark-font-color">
                                <div class="timeline__date">
                                    <div class="timeline__date-year font__family-montserrat font__size-19 font-weight-bold brk-black-font-color line__height-40">Aug, 2018</div>
                                </div>
                                <p class="mt-20 brk-dark-font-color font__family-roboto font__weight-light font__size-15 letter-spacing--1 line__height-26">Aenean vulputate eleifend tellusnean leo ligula, porttitor eu, sequat vitae, eleifend ac, enim.</p>
                            </div><img class="mt-30 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/timeline/timeline_content_08.jpg" alt="alt">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="mt-70 mb-70 mt-xl-0 mb-xl-0">
        <div class="row no-gutters">
            <div class="col-xl text-center">
                <div class="flip-box text-center mb-0" data-brk-library="component__flip_box,component__elements,fancybox">
                    <div class="flip flip_horizontal flip-box__split">
                        <div class="flip__front">
                            <div class="flip-box__split-img lazyload" data-bg="img/demo_magazine/303x443_1.png"></div>
                            <div class="pt-30 pb-30 flip-box__split-info">
                                <div class="font__family-montserrat font__weight-bold pl-20 pr-20 font__size-18">Boxed &amp; Wide Layouts</div>
                                <div class="brk-base-font-color font__family-montserrat font__size-17 font__weight-medium"><span class="old-price font__size-16">$15.00 </span><span class="font__weight-semibold font__size-18">$12.30</span></div>
                            </div>
                        </div>
                        <div class="flip__back lazyload" data-bg="img/demo_magazine/303x443_1.png">
                            <div class="flip-box__split-overlay brk-base-bg-gradient-10deg"></div>
                            <div class="flip-box__split-content">
                                <div class="pt-lg-30 pb-lg-30 pt-sm-20 pb-sm-20 pt-xs-40 pb-xs-40 pt-20 pb-20 position-relative z-index-5"><a href="#">
                                        <h4 class="font__family-montserrat font__weight-bold font__size-18 line__height-24">Boxed &amp; Wide Layouts</h4>
                                    </a>
                                    <div class="flip-box__split-price font__family-montserrat font__size-15"><span>$15.00 </span><span class="font__weight-bold"></span> $12.30</div>
                                </div>
                                <div class="flip-box__split-list">
                                    <ul class="font__family-open-sans font__size-15 line__height-20 font__weight-light text-left letter-spacing-40 pt-15 pb-15">
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                        <li><i class="far fa-check"></i>Fellentesque habitant morbi</li>
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                    </ul>
                                </div>
                                <div class="flip-box__split-actions"><a href="#" class="add-cart d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart"></i> </a><a href="img/demo_magazine/303x443_1.png" class="add-search d-flex align-items-center justify-content-center fancybox"><i class="fas fa-search"></i> </a><a href="#" class="add-wishlist d-flex align-items-center justify-content-center"><i class="fas fa-star"></i> </a><a href="#" class="add-compare d-flex align-items-center justify-content-center"><i class="fas fa-exchange-alt"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl text-center">
                <div class="flip-box text-center mb-0" data-brk-library="component__flip_box,component__elements,fancybox">
                    <div class="flip flip_horizontal flip-box__split">
                        <div class="flip__front">
                            <div class="flip-box__split-img lazyload" data-bg="img/demo_magazine/303x443_2.png"></div>
                            <div class="pt-30 pb-30 flip-box__split-info">
                                <div class="font__family-montserrat font__weight-bold pl-20 pr-20 font__size-18">Extensive Documentation</div>
                                <div class="brk-base-font-color font__family-montserrat font__size-17 font__weight-medium"><span class="old-price font__size-16">$51.00 </span><span class="font__weight-semibold font__size-18">$46.00</span></div>
                            </div>
                        </div>
                        <div class="flip__back lazyload" data-bg="img/demo_magazine/303x443_2.png">
                            <div class="flip-box__split-overlay brk-base-bg-gradient-10deg"></div>
                            <div class="flip-box__split-content">
                                <div class="pt-lg-30 pb-lg-30 pt-sm-20 pb-sm-20 pt-xs-40 pb-xs-40 pt-20 pb-20 position-relative z-index-5"><a href="#">
                                        <h4 class="font__family-montserrat font__weight-bold font__size-18 line__height-24">Extensive Documentation</h4>
                                    </a>
                                    <div class="flip-box__split-price font__family-montserrat font__size-15"><span>$51.00 </span><span class="font__weight-bold"></span> $46.00</div>
                                </div>
                                <div class="flip-box__split-list">
                                    <ul class="font__family-open-sans font__size-15 line__height-20 font__weight-light text-left letter-spacing-40 pt-15 pb-15">
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                        <li><i class="far fa-check"></i>Fellentesque habitant morbi</li>
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                    </ul>
                                </div>
                                <div class="flip-box__split-actions"><a href="#" class="add-cart d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart"></i> </a><a href="img/demo_magazine/303x443_2.png" class="add-search d-flex align-items-center justify-content-center fancybox"><i class="fas fa-search"></i> </a><a href="#" class="add-wishlist d-flex align-items-center justify-content-center"><i class="fas fa-star"></i> </a><a href="#" class="add-compare d-flex align-items-center justify-content-center"><i class="fas fa-exchange-alt"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl text-center">
                <div class="flip-box text-center mb-0" data-brk-library="component__flip_box,component__elements,fancybox">
                    <div class="flip flip_vertical flip-box__split">
                        <div class="flip__front">
                            <div class="flip-box__split-img lazyload" data-bg="img/demo_magazine/303x443_1.png"></div>
                            <div class="pt-30 pb-30 flip-box__split-info">
                                <div class="font__family-montserrat font__weight-bold pl-20 pr-20 font__size-18">Parallax Support</div>
                                <div class="brk-base-font-color font__family-montserrat font__size-17 font__weight-medium"><span class="old-price font__size-16">$42.50 </span><span class="font__weight-semibold font__size-18">$39.99</span></div>
                            </div>
                        </div>
                        <div class="flip__back lazyload" data-bg="img/demo_magazine/303x443_1.png">
                            <div class="flip-box__split-overlay brk-base-bg-gradient-10deg"></div>
                            <div class="flip-box__split-content">
                                <div class="pt-lg-30 pb-lg-30 pt-sm-20 pb-sm-20 pt-xs-40 pb-xs-40 pt-20 pb-20 position-relative z-index-5"><a href="#">
                                        <h4 class="font__family-montserrat font__weight-bold font__size-18 line__height-24">Parallax Support</h4>
                                    </a>
                                    <div class="flip-box__split-price font__family-montserrat font__size-15"><span>$42.50 </span><span class="font__weight-bold"></span> $39.99</div>
                                </div>
                                <div class="flip-box__split-list">
                                    <ul class="font__family-open-sans font__size-15 line__height-20 font__weight-light text-left letter-spacing-40 pt-15 pb-15">
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                        <li><i class="far fa-check"></i>Fellentesque habitant morbi</li>
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                    </ul>
                                </div>
                                <div class="flip-box__split-actions"><a href="#" class="add-cart d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart"></i> </a><a href="img/demo_magazine/303x443_1.png" class="add-search d-flex align-items-center justify-content-center fancybox"><i class="fas fa-search"></i> </a><a href="#" class="add-wishlist d-flex align-items-center justify-content-center"><i class="fas fa-star"></i> </a><a href="#" class="add-compare d-flex align-items-center justify-content-center"><i class="fas fa-exchange-alt"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl text-center">
                <div class="flip-box text-center mb-0" data-brk-library="component__flip_box,component__elements,fancybox">
                    <div class="flip flip_horizontal flip-box__split">
                        <div class="flip__front">
                            <div class="flip-box__split-img lazyload" data-bg="img/demo_magazine/303x443_2.png"></div>
                            <div class="pt-30 pb-30 flip-box__split-info">
                                <div class="font__family-montserrat font__weight-bold pl-20 pr-20 font__size-18">Tons Color Schemes</div>
                                <div class="brk-base-font-color font__family-montserrat font__size-17 font__weight-medium"><span class="old-price font__size-16">$41.00 </span><span class="font__weight-semibold font__size-18">$21.30</span></div>
                            </div>
                        </div>
                        <div class="flip__back lazyload" data-bg="img/demo_magazine/303x443_2.png">
                            <div class="flip-box__split-overlay brk-base-bg-gradient-10deg"></div>
                            <div class="flip-box__split-content">
                                <div class="pt-lg-30 pb-lg-30 pt-sm-20 pb-sm-20 pt-xs-40 pb-xs-40 pt-20 pb-20 position-relative z-index-5"><a href="#">
                                        <h4 class="font__family-montserrat font__weight-bold font__size-18 line__height-24">Tons Color Schemes</h4>
                                    </a>
                                    <div class="flip-box__split-price font__family-montserrat font__size-15"><span>$41.00 </span><span class="font__weight-bold"></span> $21.30</div>
                                </div>
                                <div class="flip-box__split-list">
                                    <ul class="font__family-open-sans font__size-15 line__height-20 font__weight-light text-left letter-spacing-40 pt-15 pb-15">
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                        <li><i class="far fa-check"></i>Fellentesque habitant morbi</li>
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                    </ul>
                                </div>
                                <div class="flip-box__split-actions"><a href="#" class="add-cart d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart"></i> </a><a href="img/demo_magazine/303x443_2.png" class="add-search d-flex align-items-center justify-content-center fancybox"><i class="fas fa-search"></i> </a><a href="#" class="add-wishlist d-flex align-items-center justify-content-center"><i class="fas fa-star"></i> </a><a href="#" class="add-compare d-flex align-items-center justify-content-center"><i class="fas fa-exchange-alt"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl text-center">
                <div class="flip-box text-center mb-0" data-brk-library="component__flip_box,component__elements,fancybox">
                    <div class="flip flip_horizontal flip-box__split">
                        <div class="flip__front">
                            <div class="flip-box__split-img lazyload" data-bg="img/demo_magazine/303x443_1.png"></div>
                            <div class="pt-30 pb-30 flip-box__split-info">
                                <div class="font__family-montserrat font__weight-bold pl-20 pr-20 font__size-18">Endless Possibilities</div>
                                <div class="brk-base-font-color font__family-montserrat font__size-17 font__weight-medium"><span class="old-price font__size-16">$29.00 </span><span class="font__weight-semibold font__size-18">$24.90</span></div>
                            </div>
                        </div>
                        <div class="flip__back lazyload" data-bg="img/demo_magazine/303x443_1.png">
                            <div class="flip-box__split-overlay brk-base-bg-gradient-10deg"></div>
                            <div class="flip-box__split-content">
                                <div class="pt-lg-30 pb-lg-30 pt-sm-20 pb-sm-20 pt-xs-40 pb-xs-40 pt-20 pb-20 position-relative z-index-5"><a href="#">
                                        <h4 class="font__family-montserrat font__weight-bold font__size-18 line__height-24">Endless Possibilities</h4>
                                    </a>
                                    <div class="flip-box__split-price font__family-montserrat font__size-15"><span>$29.00 </span><span class="font__weight-bold"></span> $24.90</div>
                                </div>
                                <div class="flip-box__split-list">
                                    <ul class="font__family-open-sans font__size-15 line__height-20 font__weight-light text-left letter-spacing-40 pt-15 pb-15">
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                        <li><i class="far fa-check"></i>Fellentesque habitant morbi</li>
                                        <li><i class="far fa-check"></i>Maecenas vestibulum mollis</li>
                                        <li><i class="far fa-check"></i>Pellentesque ut neque</li>
                                    </ul>
                                </div>
                                <div class="flip-box__split-actions"><a href="#" class="add-cart d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart"></i> </a><a href="img/demo_magazine/303x443_1.png" class="add-search d-flex align-items-center justify-content-center fancybox"><i class="fas fa-search"></i> </a><a href="#" class="add-wishlist d-flex align-items-center justify-content-center"><i class="fas fa-star"></i> </a><a href="#" class="add-compare d-flex align-items-center justify-content-center"><i class="fas fa-exchange-alt"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="pt-60 pb-60 pb-lg-0 text-center position-relative" data-brk-library="component__social_block,component__button"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1920x430_1.jpg" alt="alt" class="brk-abs-img lazyload"> <span class="brk-abs-overlay brk-black-76-overlay"></span>
            <div class="container all-light">
                <div class="row row-no-gutter mt-0 mt-lg-70">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="social__icon-square social__icon-square_dark"><a href="#"><i class="brk-icon slide-bg-wrap fab fa-facebook-f"><span class="slide-bg"></span></i></a>
                            <h4 class="font__family-montserrat font__size-16 text">Facebook</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="social__icon-square social__icon-square_dark"><a href="#"><i class="brk-icon slide-bg-wrap fab fa-twitter"><span class="slide-bg"></span></i></a>
                            <h4 class="font__family-montserrat font__size-16 text">Twitter</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="social__icon-square social__icon-square_dark"><a href="#"><i class="brk-icon slide-bg-wrap fab fa-instagram"><span class="slide-bg"></span></i></a>
                            <h4 class="font__family-montserrat font__size-16 text">Instagram</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="social__icon-square social__icon-square_dark"><a href="#"><i class="brk-icon slide-bg-wrap fab fa-youtube"><span class="slide-bg"></span></i></a>
                            <h4 class="font__family-montserrat font__size-16 text">YouTube</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="social__icon-square social__icon-square_dark"><a href="#"><i class="brk-icon slide-bg-wrap fab fa-google"><span class="slide-bg"></span></i></a>
                            <h4 class="font__family-montserrat font__size-16 text">Google +</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="social__icon-square social__icon-square_dark"><a href="#"><i class="brk-icon slide-bg-wrap fab fa-vimeo-v"><span class="slide-bg"></span></i></a>
                            <h4 class="font__family-montserrat font__size-16 text">Vimeo</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="brk-footer position-relative" data-brk-library="component__footer">
        <div class="brk-footer__wrapper pt-sm-70 pt-40"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1920x430_2.jpg" alt="alt" class="brk-abs-img lazyload"> <span class="brk-abs-overlay brk-blue-86-overlay"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 order-sm-1 order-2">
                        <h6 class="brk-white-font-color font__family-montserrat font__size-36 font__weight-bold line__height-36 mb-50 text-center text-sm-left">Our Info</h6>
                        <p class="font__family-open-sans font__size-14 line__height-16 mb-15 brk-white-font-color opacity-50 text-center text-sm-left">Call Us or use Contact Form</p>
                        <p class="font__size-36 text-center text-sm-left"><a href="#" class="brk-white-font-color font__family-open-sans font__weight-light line__height-36">8 800 12 34 567</a></p>
                        <hr class="horiz-line mt-35 mb-40">
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-10 brk-white-font-color text-center text-sm-left"><i class="brk-footer-icon text-middle fa fa-envelope line__height-24"></i> <a href="mailto:info@domain.com" class="show-inline-block">info@domain.com</a></p>
                        <p class="font__family-open-sans font__weight-bold font__size-14 mb-40 mb-sm-10 brk-white-font-color text-center text-sm-left"><i class="brk-footer-icon text-middle fa fa-map-marker line__height-24"></i> <span>Chicago, USA</span></p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-8 order-sm-2 order-1">
                        <h6 class="brk-white-font-color font__family-montserrat font__size-36 font__weight-bold line__height-36 text-center text-sm-left pt-xs-20">Contact Us</h6>
                        <form action="#" class="brk-subscribe-mail brk-form-strict brk-form-strict_footer-3 mb-90" data-brk-library="component__form,recaptcha">
                            <div class="row">
                                <div class="col-12 col-lg-6"><input type="text" placeholder="Name" name="FNAME"></div>
                                <div class="col-12 col-lg-6"><input type="email" placeholder="Email" name="EMAIL"></div>
                                <div class="col-12"><textarea id="footer3" name="MESSAGE" cols="30" rows="5" placeholder="Your message" class="bordered-bottom"></textarea></div><button type="submit" class="d-flex align-items-center justify-content-center font__size-12 brk-white-font-color brk-base-bg-6"><i class="fal fa-envelope mr-15 font__size-14"></i> <span class="font__family-montserrat font__size-14 text-uppercase letter-spacing-60">submit</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="brk-base-bg-6">
                <div class="container">
                    <div class="d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap pt-20 pb-15">
                        <p class="brk-white-font-color font__family-open-sans font__size-14">&#xA9; 2018 <span class="font__weight-bold">Berserk</span> All rights reserved</p>
                        <div class="brk-social-links brk-white-font-color font__size-12" data-brk-library="component__social_links"><a href="#" class="brk-social-links__item"><i class="fab fa-twitter"></i> </a><a href="#" class="brk-social-links__item"><i class="fab fa-instagram"></i> </a><a href="#" class="brk-social-links__item"><i class="fab fa-google-plus-g"></i> </a><a href="#" class="brk-social-links__item"><i class="fab fa-youtube"></i> </a><a href="#" class="brk-social-links__item"><i class="fab fa-vimeo"></i> </a><a href="#" class="brk-social-links__item"><i class="fab fa-vk"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><a href="#top" id="toTop"></a>
<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('vendor/revslider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('vendor/revslider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('vendor/revslider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('vendor/revslider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('vendor/revslider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script>
    var revapi48,
        tpj;
    (function() {
        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
        else onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on") tpj.noConflict();
            }
            if (tpj("#rev_slider_48_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_48_1");
            } else {
                revapi48 = tpj("#rev_slider_48_1").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "{{ asset('vendor/revslider/js/') }}",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 6000,
                    navigation: {},
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1200, 992, 768, 576],
                    gridheight: [960, 800, 800, 640],
                    lazyType: "none",
                    scrolleffect: {
                        blur: "on",
                        maxblur: "50",
                        on_parallax_layers: "on",
                    },
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        speedbg: 0,
                        speedls: 1000,
                        levels: [0, 10, 15, 20, 25, -30, -35, -40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner0",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }; /* END OF revapi call */
        }; /* END OF ON LOAD FUNCTION */
    }()); /* END OF WRAPPING FUNCTION */
</script>
</body>

</html>