@extends('layouts.auth')

@section('content')
    <div class="main-wrapper">
        <main class="main-container">
            <section class="">
                <div class="container-fluid">
                    <div class="row row-no-gutter">
                        <div class="col-12 col-lg-5 order-2 order-lg-1">
                            <div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center">
                                <div class="brk-backgrounds brk-base-bg-gradient-15 brk-abs-overlay"
                                     data-brk-library="component__backgrounds_css,component__backgrounds_js,assets_particleground">
                                    <div class="brk-backgrounds__canvas brk-particles-standart"></div>
                                </div>
                                <a href="{{ route('home') }}" class="z-index-2 mb-60 pl-15 pr-15">
                                    <img src="{{asset('custom/logo_icon/logo.png')}}" style="filter: brightness(0) invert(1);" alt="logo" class="">
                                </a>
                                <a href="{{ route('home') }}"
                                   class="btn-backgrounds btn-backgrounds_transparent btn-backgrounds_left-icon font__family-montserrat font__weight-normal text-uppercase font__size-13 z-index-2 text-center"
                                   style="padding-left:85px; padding-right: 60px;" data-brk-library="component__button">
                                    <span class="text">Back to the Homepage</span>
                                    <span class="before">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 order-1 order-lg-2">
                            <div class="full-screen d-flex align-items-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-1"></div>
                                        <div class="col-12 col-md-10">
                                            <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45">REGISTER</h1>
                                            <form method="POST" action="{{ route('register') }}" class="brk-form brk-form-strict maxw-570" data-brk-library="component__form">
                                                @csrf

                                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

                                                <div class="mt-20 d-flex flex-wrap justify-content-between">
                                                    <button class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
                                                        <span class="text">REGISTER</span>
                                                        <span class="before">
                                                            <i class="far fa-hand-point-right"></i>
                                                        </span>
                                                    </button>
                                                    <a href="{{ route('login') }}"
                                                       class="btn-backgrounds btn-backgrounds_no-icon btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10"
                                                       data-brk-library="component__button">
                                                        <span class="text">LOGIN</span>
                                                    </a>
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