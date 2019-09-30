@extends('layouts.auth')
@section('title',trans('app.title_register'))
@section('content')
    <div class="main-wrapper">
        <main class="main-container">
            <section class="">
                <div class="container-fluid">
                    <div class="row row-no-gutter">
                        <div class="col-12 col-lg-5 d-lg-block d-none">
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
                        <div class="col-12 col-lg-7">
                            <div class="full-screen d-flex align-items-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-10 m-auto">
                                            <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45 text-center text-lg-left">REGISTER</h1>
                                            <form method="POST" action="{{ route('register') }}" class="brk-form brk-form-strict maxw-570 mx-auto mx-lg-0" data-brk-library="component__form">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-12">
                                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                        @error('name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required autocomplete="email">
                                                        @error('email')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <input id="fname" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autocomplete="first_name">
                                                        @error('first_name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <input id="lname" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autocomplete="last_name">
                                                        @error('last_name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
                                                        @error('password')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center flex-column flex-lg-row">
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
                                                    </div>
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
