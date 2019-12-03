@extends('layouts.auth')
@section('title',trans('app.title_register'))
@section('content')
    <div class="main-wrapper">
        <main class="main-container">
            <section>
                <div class="row no-gutters">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                        <div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center">
                            <div class="brk-backgrounds brk-base-bg-gradient-15 brk-abs-overlay" data-brk-library="component__backgrounds_css,component__backgrounds_js,assets_particleground">
                                <div class="brk-backgrounds__canvas brk-particles-standart"></div>
                            </div>
                            <a href="{{ route('home') }}" class="z-index-2 mb-60 pl-15 pr-15">
                                <img src="{{asset('custom/logo_icon/logo.png')}}" style="filter: brightness(0) invert(1);" alt="logo" class="">
                            </a>
                            <a href="{{ route('home') }}" class="btn-backgrounds btn-backgrounds_transparent btn-backgrounds_left-icon font__family-montserrat font__weight-normal text-uppercase font__size-13 z-index-2 text-center" style="padding-left:85px; padding-right: 60px;" data-brk-library="component__button">
                                <span class="text">{{ trans('app.back_to_the_homepage') }}</span>
                                <span class="before"><i class="fas fa-arrow-left"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 order-1 order-lg-2">
                        <div class="full-screen d-flex align-items-center">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-10 m-auto">
                                        <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45  text-center text-lg-left">{{ trans('app.register') }}</h1>
                                        <form method="POST" action="{{ route('register') }}" class="brk-form brk-form-strict mx-auto mx-lg-0" data-brk-library="component__form" data-parsley-validate>
                                            @csrf

                                            <div class="row">
                                                <div class="col-6">
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="{{ trans('app.username') }}" value="{{ old('name') }}" required autocomplete="name" autofocus data-parsley-errors-container="#username-error">
                                                    @error('name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @else
                                                        <div id="username-error" class="d-inline-block invalid-feedback"></div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ trans('app.email') }}" value="{{ old('email') }}" required autocomplete="email" data-parsley-errors-container="#email-error">
                                                    @error('email')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @else
                                                        <div id="email-error" class="d-inline-block invalid-feedback"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <input id="fname" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="{{ trans('app.first_name') }}" value="{{ old('first_name') }}" required autocomplete="first_name" data-parsley-errors-container="#first-name-error">
                                                    @error('first_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @else
                                                        <div id="first-name-error" class="d-inline-block invalid-feedback"></div>
                                                    @enderror

                                                </div>
                                                <div class="col-6">
                                                    <input id="lname" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="{{ trans('app.last_name') }}" value="{{ old('last_name') }}" required autocomplete="last_name"  data-parsley-errors-container="#last-name-error">
                                                    @error('last_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @else
                                                        <div id="last-name-error" class="d-inline-block invalid-feedback"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ trans('app.password') }}" required autocomplete="new-password"  data-parsley-equalto="#password-confirm" data-parsley-errors-container="#pass-error">
                                                    @error('password')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @else
                                                        <div id="pass-error" class="d-inline-block invalid-feedback"></div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('app.confirm_password') }}" required autocomplete="new-password"  data-parsley-errors-container="#password-confirm-error" >
                                                    <div id="password-confirm-error" class="d-inline-block invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center flex-column flex-lg-row">
                                                        <button class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
                                                            <span class="text">{{ trans('app.register') }}</span>
                                                            <span class="before">
                                                                <i class="far fa-hand-point-right"></i>
                                                            </span>
                                                        </button>
                                                        <a href="{{ route('login') }}"
                                                           class="btn-backgrounds btn-backgrounds_no-icon btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10"
                                                           data-brk-library="component__button">
                                                            <span class="text">{{ trans('app.login') }}</span>
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

@section('script')
    <script src="{{ asset('custom/plugin/parsley.js/parsley.min.js') }}"></script>
    <script src="{{ asset("custom/plugin/parsley.js/i18n/$lang.js") }}"></script>
    <script src="{{ asset('custom/js/app.js') }}"></script>
    <script src="{{ asset('custom/js/membership_init.js') }}"></script>
@endsection
