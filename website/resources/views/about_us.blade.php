@extends('layouts.app')

@section('style')
    <style>.magazine-big-font{background-image:url(img/demo_magazine/1222x167_1.jpg);font-size: 156px;line-height: 156px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 767px){.magazine-big-font{font-size: 66px;line-height: 70px;}}</style>
@endsection

@section('content')
    <div class="breadcrumbs__section breadcrumbs__section-grayscale pt-130 pb-60 bg__style lazyload" data-bg="img/demo_magazine/1920x195_1.jpg" data-brk-library="component__breadcrumbs_css">
        <div class="full__size-absolute brk-bg-black opacity-70"></div>
        <div class="container">
            <div class="breadcrumbs__wrapper">
                <div class="text-left" data-brk-library="component__title">
                    <h2 class="brk-white-font-color font__size-36 line__height-50 font__family-montserrat-alt font__weight-bold">
                        About Us
                    </h2>
                    <h5 class="font__size-14 font__family-montserrat highlight-trend">Page sub title goes here</h5>
                </div>
                <ol class="breadcrumb font__size-14 font__weight-bold font__family-montserrat">
                    <li>
                        <a href="#">Bread <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="active">Crumbs</li>
                </ol>
            </div>
        </div>
    </div>
    <h1 class="sr-only">About Us</h1>
    <div class="brk-bg-light-dark-2 bg-cover bg-norepeat bg-position_bottom-center pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
        <div class="container">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1170x478_1.jpg" alt="alt" class="img-fluid mb-50 lazyload">
            <div class="brk-tabs brk-tabs-icon-left" data-hash="true" data-brk-library="component__tabs">
                <ul class="brk-tabs-nav font__family-montserrat">
                    <li class="brk-tab"><span class="font__weight-bold">Diamond</span><i class="far fa-gem" aria-hidden="true"></i></li>
                    <li class="brk-tab"><span class="font__weight-bold">Delicious</span><i class="fab fa-delicious" aria-hidden="true"></i></li>
                    <li class="brk-tab"><span class="font__weight-bold">G & G</span><i class="fab fa-gg" aria-hidden="true"></i></li>
                </ul>
                <div class="brk-tabs-content">
                    <div id="tab-1" class="brk-tab-item">
                        <h2 class="font__family-montserrat font__size-24 line__height-30 mb-20 mt-20 text-uppercase">Some title goes here</h2>
                        <div class="float-right mt-10 ml-lg-4" style="width: 100%;max-width: 470px">
                            <img class="float-left mr-lg-4" src="img/demo_magazine/letter-colored.png" alt="alt">
                            <p class="pt-10 brk-dark-font-color">Aenean vulputate eleifend tellus. Aenean leo ula, porttitor eu, consequat vitae, eleifend ac.</p>
                            <h3 class="font__family-montserrat font__weight-bold text-uppercase font__size-28 mt-30 mb-40" style="letter-spacing: -.03em;padding-left: 27px;">Be Awesome & Be creative!</h3>
                        </div>
                        <p class="mb-20 brk-dark-font-color">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                        <p class="mb-20 brk-dark-font-color">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, nsequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibetate eleifend tellus Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper.</p>
                        <p class="brk-dark-font-color">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                    </div>
                    <div id="tab-2" class="brk-tab-item">
                        <h2 class="font__family-montserrat font__weight-bold font__size-28 line__height-34 mb-30">As Bobby Flay Cooks Up an IPO, Can He Still Remain the Hands-On Guy?</h2>
                        <p class="brk-dark-font-color text-left mb-20">It’s 1 pm on a Thursday, and Bobby Flay is sitting in his favorite spot to conduct daily business: the corner banquette in the front window at Gato, the Lower Manhattan outpost of his fine-dining empire. He is dressed casually in a dark-blue henley and jeans, wrapping up a call as his team gets situated around him for the first agenda item of the day: testing 10 new cocktails.</p>
                        <p class="brk-dark-font-color text-left mb-20">Marlene is the new bar manager, and this is her first time pitching the boss her own concoctions. She’s a bit nervous, but she’s done her homework. And Flay is impressed, on the whole, with her creations. But he zeroes in on one drink in particular. “You know what the surprising flavor in here is,” he tells her with genuine admiration, “and not everyone’s going to pick up on this -- it’s the pink peppercorn.” But after a further moment’s reflection, the garnish in Marlene’s drink gives him pause.</p>
                        <p class="brk-dark-font-color text-left mb-20">After 30-plus years running a kitchen, opening dozens of successful upscale and fast-casual restaurants employing, at present, more than 1,000 people and managing a widening universe of side projects, TV shows and product lines, the 52-year-old Flay is cocksure and precise in his knowledge of what will and will not go over with the customer, and he shares that knowledge freely with his staffers.</p>
                    </div>
                    <div id="tab-3" class="brk-tab-item">
                        <h2 class="font__family-montserrat font__weight-bold font__size-28 line__height-34 mb-30">How Glossier Hacked Social Media to Build A Cult-Like Following</h2>
                        <p class="brk-dark-font-color text-left mb-20">On a Thursday afternoon in late spring, 32-year-old Glossier founder and CEO Emily Weiss rides the elevator to the penthouse level of her company's downtown Manhattan headquarters. She's a thoroughly millennial girlboss in jeans, sneakers and a royal blue sweatshirt with weiss embroidered in small white script. Her hair is pulled back in a ponytail, and for the founder of a beauty products company, she wears notably little makeup - just some mascara and possibly a swipe of Glossier Lip Gloss, a recent product release touted online as having a "fuzzy doe-foot applicator."</p>
                        <p class="brk-dark-font-color text-left mb-60">A former teen model, Weiss is beautiful but not intimidating, either by nature or by design (probably a little of both). After all, her company’s popularity is directly related to her ability to cultivate a feeling of friendship with and among her customers. Just enough relatability is key.</p>
                        <div class="cfa__wrapper cfa__container bg__style overlay__gradient all-light text-center text-lg-left lazyload" data-bg="img/1170x108_2.jpg" data-brk-library="component__call_to_action">
                            <h4 class="font__family-montserrat font__size-21 font__weight-bold no-wrap">CFA Heading</h4>
                            <p class="font__family-open-sans font__size-14 brk-white-font-color opacity-70 text-center text-lg-left brk-dark-font-color">
                                Call for action Block heading title goes
                            </p>
                            <span class="overlay_after brk-base-bg-gradient-90deg-96"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brk-base-bg-6 pt-lg-100 pb-lg-90 pt-70 pb-70">
        <div class="text-center mb-20 mb-xl-0">
            <span class="d-inline-block brk-text-clip bg-cover font__weight-bold text-uppercase magazine-big-font mb-30">Our Awards</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="counter__wrapper-filled gray text-center" data-brk-library="component__counter">
                        <div class="counter-wrap">
                            <svg>
                                <circle cx="93" cy="93" r="93"></circle>
                            </svg>
                            <div class="counter-tri"><span class="before"></span></div>
                            <div data-count-speed="3000" data-count-from="0" data-count-to="67" data-count-max="250" class="counter font__weight-semibold"></div>
                        </div>
                        <h4 class="text-white font__family-montserrat font__weight-bold font__size-19 line__height-22 mt-30">
                            Some item title <br>goes here

                        </h4>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="counter__wrapper-filled gray text-center" data-brk-library="component__counter">
                        <div class="counter-wrap">
                            <svg>
                                <circle cx="93" cy="93" r="93"></circle>
                            </svg>
                            <div class="counter-tri"><span class="before"></span></div>
                            <div data-count-speed="3000" data-count-from="0" data-count-to="972" data-count-max="2400" class="counter font__weight-semibold"></div>
                        </div>
                        <h4 class="text-white font__family-montserrat font__weight-bold font__size-19 line__height-22 mt-30">
                            Some item title <br>goes here

                        </h4>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="counter__wrapper-filled gray text-center" data-brk-library="component__counter">
                        <div class="counter-wrap">
                            <svg>
                                <circle cx="93" cy="93" r="93"></circle>
                            </svg>
                            <div class="counter-tri"><span class="before"></span></div>
                            <div data-count-speed="3000" data-count-from="0" data-count-to="1820" data-count-max="2000" class="counter font__weight-semibold"></div>
                        </div>
                        <h4 class="text-white font__family-montserrat font__weight-bold font__size-19 line__height-22 mt-30">
                            Some item title <br>goes here

                        </h4>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="counter__wrapper-filled gray text-center" data-brk-library="component__counter">
                        <div class="counter-wrap">
                            <svg>
                                <circle cx="93" cy="93" r="93"></circle>
                            </svg>
                            <div class="counter-tri"><span class="before"></span></div>
                            <div data-count-speed="3000" data-count-from="0" data-count-to="162" data-count-max="300" class="counter font__weight-semibold"></div>
                        </div>
                        <h4 class="text-white font__family-montserrat font__weight-bold font__size-19 line__height-22 mt-30">
                            Some item title <br>goes here

                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-lg-80 pb-lg-80 pt-70 pb-70">
        <div class="icon__wrapper-main icon__wrapper-strict active__effect-main" data-brk-library="component__sequence">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="icon__wrapper active__effect pt-50 pb-50 pl-50 pr-50">
                        <span class="bg-before bg__style lazyload" data-bg="img/demo_magazine/390x370_1.jpg"></span>
                        <span class="grad-overlay"></span>
                        <h2 class="font__family-montserrat font__size-124 font__weight-light number">01</h2>
                        <h4 class="font__family-montserrat font__size-24 font__weight-light line__height-30 text-uppercase">We Build
                            Amazing <br><span class="font__weight-bold">Projects</span></h4>
                        <a href="#" class="font__family-open-sans font__size-16 font__weight-bold text-uppercase link">Read More <i class="icon fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon__wrapper z-index-2 active__effect active current pt-50 pb-50 pl-50 pr-50">
                        <span class="bg-before bg__style lazyload" data-bg="img/demo_magazine/390x370_2.jpg"></span>
                        <span class="grad-overlay"></span>
                        <h2 class="font__family-montserrat font__size-124 font__weight-light number">02</h2>
                        <h4 class="font__family-montserrat font__size-24 font__weight-light line__height-30 text-uppercase">We Build
                            Amazing <br><span class="font__weight-bold">Projects</span></h4>
                        <a href="#" class="font__family-open-sans font__size-16 font__weight-bold text-uppercase link">Read More <i class="icon fa fa-long-arrow-right"></i></a>
                        <span class="triangle triangle-after fa fa-angle-right brk-base-bg-6"></span>
                        <span class="triangle triangle-before fa fa-angle-right brk-base-bg-6"></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon__wrapper active__effect pt-50 pb-50 pl-50 pr-50">
                        <span class="bg-before bg__style lazyload" data-bg="img/demo_magazine/390x370_3.jpg"></span>
                        <span class="grad-overlay"></span>
                        <h2 class="font__family-montserrat font__size-124 font__weight-light number">03</h2>
                        <h4 class="font__family-montserrat font__size-24 font__weight-light line__height-30 text-uppercase">We Build
                            Amazing <br><span class="font__weight-bold">Projects</span></h4>
                        <a href="#" class="font__family-open-sans font__size-16 font__weight-bold text-uppercase link">Read More <i class="icon fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-60 pb-60 pb-lg-0 text-center position-relative" data-brk-library="component__social_block,component__button">
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1920x430_1.jpg" alt="alt" class="brk-abs-img lazyload">
        <span class="brk-abs-overlay brk-black-76-overlay"></span>
        <div class="container all-light">
            <div class="row no-gutters mt-0 mt-lg-70">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="social__icon-square social__icon-square_dark">
                        <a href="#"><i class="brk-icon slide-bg-wrap fab fa-facebook-f"><span class="slide-bg"></span></i></a>
                        <h4 class="font__family-montserrat font__size-16 text">Facebook</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="social__icon-square social__icon-square_dark">
                        <a href="#"><i class="brk-icon slide-bg-wrap fab fa-twitter"><span class="slide-bg"></span></i></a>
                        <h4 class="font__family-montserrat font__size-16 text">Twitter</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="social__icon-square social__icon-square_dark">
                        <a href="#"><i class="brk-icon slide-bg-wrap fab fa-instagram"><span class="slide-bg"></span></i></a>
                        <h4 class="font__family-montserrat font__size-16 text">Instagram</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="social__icon-square social__icon-square_dark">
                        <a href="#"><i class="brk-icon slide-bg-wrap fab fa-youtube"><span class="slide-bg"></span></i></a>
                        <h4 class="font__family-montserrat font__size-16 text">YouTube</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="social__icon-square social__icon-square_dark">
                        <a href="#"><i class="brk-icon slide-bg-wrap fab fa-google"><span class="slide-bg"></span></i></a>
                        <h4 class="font__family-montserrat font__size-16 text">Google +</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="social__icon-square social__icon-square_dark">
                        <a href="#"><i class="brk-icon slide-bg-wrap fab fa-vimeo-v"><span class="slide-bg"></span></i></a>
                        <h4 class="font__family-montserrat font__size-16 text">Vimeo</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
