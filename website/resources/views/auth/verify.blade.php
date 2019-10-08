@extends('layouts.auth')

@section('title',trans('app.title_verify_email'))

@section('content')
    <div class="main-wrapper">
        <main class="main-container">
            <section class="">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                        <div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center z-index-2">
                            <div class="brk-backgrounds brk-base-bg-gradient-15 brk-abs-overlay"
                                 data-brk-library="component__backgrounds_css,component__backgrounds_js,assets_particleground">
                                <div class="brk-backgrounds__canvas brk-particles-standart"></div>
                            </div>
                            <a href="{{ route('home') }}" class="z-index-2 mb-60 pl-15 pr-15">
                                <img src="{{asset('custom/logo_icon/logo.png')}}" alt="syssr-logo"
                                     style="filter: brightness(0) invert(1);">
                            </a>
                            <a href="{{ route('home') }}"
                               class="btn-backgrounds btn-backgrounds_transparent btn-backgrounds_left-icon font__family-montserrat font__weight-normal text-uppercase font__size-13 z-index-2 text-center"
                               style="padding-left:85px; padding-right: 60px;" data-brk-library="component__button"><span
                                    class="text">{{ trans('app.back_to_the_homepage') }}</span> <span class="before"><i
                                        class="fas fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 order-1 order-lg-2">
                        <div class="full-screen d-flex align-items-center pt-30 pb-30 pt-lg-0 pb-lg-0">
                            <div class="container-fluid">
                                <div class="row justify-content-lg-start justify-content-center">
                                    <div class="col-12 col-md-10 m-auto">
                                        <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-30 text-center text-lg-left">
                                        {{ trans('app.verify_email') }}</h1>

                                        @if (session('resent'))
                                            @include('partials._alert',['message' => trans('app.send_verify_email_message')])
                                        @endif

                                        {{ trans('app.before_proceeding_verify_email_message') }}
                                        {{ trans('app.not_receive_verify_email_message') }},
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ trans('app.request_another') }}</button>.
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
