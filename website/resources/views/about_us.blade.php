@extends('layouts.app')

@section('title',trans('app.title_about_us'))

@include('partials._about_society_style')

@section('content')
    @include('partials._breadcrumbs',['title' => trans('app.about_us')])
    <div class="main-wrapper">
        <main class="main-container">
            <div class="brk-bg-light-dark-2 bg-cover bg-norepeat bg-position_bottom-center pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
                <div class="container">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1170x478_1.jpg" alt="alt" class="img-fluid mb-50 lazyload">

                    <p class="brk-dark-font-color text-left mb-20">On a Thursday afternoon in late spring, 32-year-old Glossier founder and CEO Emily Weiss rides the elevator to the penthouse level of her company's downtown Manhattan headquarters. She's a thoroughly millennial girlboss in jeans, sneakers and a royal blue sweatshirt with weiss embroidered in small white script. Her hair is pulled back in a ponytail, and for the founder of a beauty products company, she wears notably little makeup - just some mascara and possibly a swipe of Glossier Lip Gloss, a recent product release touted online as having a "fuzzy doe-foot applicator."</p>
                    <p class="brk-dark-font-color text-left mb-60">A former teen model, Weiss is beautiful but not intimidating, either by nature or by design (probably a little of both). After all, her company’s popularity is directly related to her ability to cultivate a feeling of friendship with and among her customers. Just enough relatability is key.</p>
                </div>
            </div>
        </main>
    </div>
@endsection
