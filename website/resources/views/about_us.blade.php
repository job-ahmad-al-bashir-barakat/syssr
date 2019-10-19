@extends('layouts.app')

@section('title',trans('app.title_about_us'))

@section('style')
    <style>.magazine-big-font{background-image:url(img/demo_magazine/1222x167_1.jpg);font-size: 156px;line-height: 156px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 767px){.magazine-big-font{font-size: 66px;line-height: 70px;}}</style>
@endsection

@section('content')
    <div class="breadcrumbs__section breadcrumbs__section-grayscale pt-130 pb-60 bg__style lazyload" data-bg="img/demo_magazine/1920x195_1.jpg" data-brk-library="component__breadcrumbs_css">
        <div class="full__size-absolute brk-bg-black opacity-70"></div>
        <div class="container">
            <div class="breadcrumbs__wrapper align-items-center">
                <div class="text-left" data-brk-library="component__title">
                    <h2 class="brk-white-font-color font__size-36 line__height-50 font__family-montserrat-alt font__weight-bold">
                        {{ trans('app.about_us') }}
                    </h2>
                </div>
                <ol class="breadcrumb font__size-14 font__weight-bold font__family-montserrat">
                    <li>
                        <a href="#">{{ trans('app.about_us') }} <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="active">{{ trans('app.home') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <h1 class="sr-only">About Us</h1>
    <div class="brk-bg-light-dark-2 bg-cover bg-norepeat bg-position_bottom-center pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
        <div class="container">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1170x478_1.jpg" alt="alt" class="img-fluid mb-50 lazyload">

            <p class="brk-dark-font-color text-left mb-20">On a Thursday afternoon in late spring, 32-year-old Glossier founder and CEO Emily Weiss rides the elevator to the penthouse level of her company's downtown Manhattan headquarters. She's a thoroughly millennial girlboss in jeans, sneakers and a royal blue sweatshirt with weiss embroidered in small white script. Her hair is pulled back in a ponytail, and for the founder of a beauty products company, she wears notably little makeup - just some mascara and possibly a swipe of Glossier Lip Gloss, a recent product release touted online as having a "fuzzy doe-foot applicator."</p>
            <p class="brk-dark-font-color text-left mb-60">A former teen model, Weiss is beautiful but not intimidating, either by nature or by design (probably a little of both). After all, her company’s popularity is directly related to her ability to cultivate a feeling of friendship with and among her customers. Just enough relatability is key.</p>
        </div>
    </div>
@endsection
