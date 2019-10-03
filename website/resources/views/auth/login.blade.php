@extends('layouts.auth')
@section('title',trans('app.title_login'))
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
                                        <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45 text-center text-lg-left">
                                            {{ trans('app.login') }}</h1>
                                        <form method="POST" action="{{ route('login') }}" class="brk-form brk-form-strict maxw-570 mx-auto mx-lg-0"
                                              data-brk-library="component__form">
                                            @csrf

                                            <div class="row">
                                                <div class="col-12">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ trans('app.email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ trans('app.password') }}" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="no-margin pl-10 pr-10 mb-30 mt-40 d-flex flex-wrap justify-content-between align-items-center">
                                                        <div>
                                                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="brk-form-checkbox-label" for="remember">{{ trans('app.remember_me') }}</label>
                                                        </div>
                                                        @if (Route::has('password.request'))
                                                        <div>
                                                            <a class="font__size-14 line__height-24 brk-base-font-color text-decoration_underline" href="{{ route('password.request') }}">{{ trans('app.forgot_password') }}</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div
                                                        class="mt-20 d-flex flex-wrap justify-content-between align-items-center flex-column flex-lg-row">
                                                        <button
                                                            class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10"
                                                            data-brk-library="component__button"><span class="text">{{ trans('app.login_now') }}</span>
                                                            <span class="before"><i
                                                                    class="far fa-hand-point-right"></i></span>
                                                        </button>
                                                        <a href="{{ route('register') }}"
                                                           class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10"
                                                           data-brk-library="component__button">
                                                            <span class="text">{{ trans('app.register') }}</span>
                                                            <span class="before">
                                                                <i class="fas fa-user"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
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
