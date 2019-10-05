@extends('layouts.auth')

@section('title', trans('cms.login'))

@section('content')

    <div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                    <div class="kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__body">
                                <div class="kt-login__logo">
                                    <img src="{{asset('logo_icon/logo.png')}}" alt="syssr-logo">
                                </div>

                                <div class="kt-login__signin">
                                    <div class="kt-login__head">
                                        <h3 class="kt-login__title">{{ trans('cms.login_dashboard') }}</h3>
                                    </div>
                                    <div class="kt-login__form">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="{{ trans('cms.username') }}" required autocomplete="username" autofocus>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password" placeholder="{{ trans('cms.password') }}" class="form-control form-control-last @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="kt-login__extra">
                                                <label class="kt-checkbox">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ trans('cms.remember_me') }}
                                                    <span></span>
                                                </label>        
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ trans('cms.forgot_password') }}
                                                    </a>
                                                @endif                
                                            </div>
                                            <div class="kt-login__actions">
                                                <button type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">{{ trans('cms.login') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url('{{asset('theme/media//bg/bg-5.jpg')}}');">
                    <div class="kt-login__section">
                        <div class="kt-login__block" style="padding: 25px;">
                            <h3 class="kt-login__title">{{trans('cms.quote_day')}}</h3>
                            <div class="kt-login__desc" id="login-quote">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         	
    </div>

@endsection

@section('js')
<script>
    $(function(){
        $.get('http://quotes.rest/qod.json',function(res){
            var quote = res.contents.quotes[0].quote;
            $('#login-quote').text(quote);
        });
    });
</script>
@stop