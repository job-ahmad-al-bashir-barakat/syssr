@extends('layouts.auth')

@section('content')
    <div class="main-wrapper">
        <main class="main-container">
            <section class="">
                <div class="container-fluid">
                    <div class="row row-no-gutter">
                        <div class="col-12 col-lg-5 d-lg-block d-none">
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
                                            class="text">Back to the Homepage</span> <span class="before"><i
                                                class="fas fa-arrow-left"></i></span></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="full-screen d-flex align-items-center pt-30 pb-30 pt-lg-0 pb-lg-0">
                                <div class="container-fluid">
                                    <div class="row justify-content-lg-start justify-content-center">
                                        <div class="col-lg-2 d-none d-lg-block"></div>
                                        <div class="col-12 col-lg-10">
                                            <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45 text-center text-lg-left">
                                                Reset Password</h1>
                                            <form method="POST" action="{{ route('password.update') }}" class="brk-form brk-form-strict maxw-570 mx-auto mx-lg-0"
                                                  data-brk-library="component__form">
                                                @csrf

                                                <input type="hidden" name="token" value="{{ $token }}">

                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">


                                                <div class="no-margin pl-10 pr-10 mb-30 mt-40 d-flex flex-wrap justify-content-between align-items-center">
                                                    <div>
                                                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} required>
                                                        <label class="brk-form-checkbox-label" for="checkbox-strict-1">Remember Me</label>
                                                    </div>
                                                    @if (Route::has('password.request'))
                                                        <div>
                                                            <a class="font__size-14 line__height-24 brk-base-font-color text-decoration_underline" href="{{ route('password.request') }}">Forgot password?</a>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mt-20 d-flex flex-wrap justify-content-between">
                                                    <button class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10 w-100" data-brk-library="component__button">
                                                        <span class="text">Reset Password</span>
                                                        <span class="before">
                                                            <i class="far fa-hand-point-right"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
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
