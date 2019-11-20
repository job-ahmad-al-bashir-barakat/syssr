@extends('layouts.app')

@section('title',trans('app.title_society_goals'))

@include('_about_society_style')

@section('content')
    @include('partials._breadcrumbs',['title' => trans('app.society_goals'), 'banner' => asset('img/syssr/our-goals-banner.jpg')])
    <div class="main-wrapper">
        <main class="main-container">
            <div class="brk-bg-light-dark-2 bg-cover bg-norepeat bg-position_bottom-center pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
                <div class="container">
                    {!! $our_goals !!}
                </div>
            </div>
        </main>
    </div>
@endsection
