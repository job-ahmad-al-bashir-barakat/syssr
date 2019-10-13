@extends('layouts.app')

@section('title', trans('app.title_profile'))

@section('style')
    <style>.magazine-big-font{background-image:url(img/demo_magazine/1222x167_1.jpg);font-size: 156px;line-height: 156px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 767px){.magazine-big-font{font-size: 66px;line-height: 70px;}}</style>
    <link rel="stylesheet" href="{{ asset('custom/plugin/slim-cropper/slim/slim.min.css') }}">
@endsection

@section('content')
    <div class="breadcrumbs__section breadcrumbs__section-grayscale pt-130 pb-60 bg__style lazyload" data-bg="img/demo_magazine/1920x195_1.jpg" data-brk-library="component__breadcrumbs_css">
        <div class="full__size-absolute brk-bg-black opacity-70"></div>
        <div class="container">
            <div class="breadcrumbs__wrapper align-items-center">
                <div class="pull-left text-left" data-brk-library="component__title">
                    <h2 class="brk-white-font-color font__size-36 line__height-50 font__family-montserrat-alt font__weight-bold">{{ trans('app.profile') }}</h2>
                </div>
                <ol class="breadcrumb pull-right font__size-14 font__weight-bold font__family-montserrat">
                    <li><a href="{{ RouteUrls::home() }}">{{ trans('app.home') }} <i class="fas fa-arrow-right"></i></a></li>
                    <li class="active">{{ trans('app.profile') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <h1 class="sr-only">Profile</h1>
    <div class="pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
        <div class="container">
            <form id="form-profile" class="form-ajax" enctype="multipart/form-data" method="POST" action="{{ $cms_api_url . 'member/' . Auth::id() }}" data-parsley-validate>
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="row">
                    <div class="col-md-6">
                        <div class="brk-form brk-form-round" data-brk-library="component__form">

                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-username-form">{{ trans('app.username') }}</label>
                                <input id="brk-username-form" name="username" type="text" placeholder="{{ trans('app.username') }}" value="{{ $user->username ?? '' }}" required data-parsley-errors-container="#username-error">
                                <div id="username-error" class="d-inline-block invalid-feedback pl-4"></div>
                            </div>

                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-email-form">{{ trans('app.email') }}</label>
                                <input id="brk-email-form" name="email" type="email" placeholder="{{ trans('app.email') }}" value="{{ $user->email ?? '' }}" required  data-parsley-errors-container="#email-error">
                                <div id="email-error" class="d-inline-block invalid-feedback pl-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-50">
                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-firstname-form">{{ trans('app.first_name') }}</label>
                                        <input id="brk-firstname-form" name="first_name" type="text" placeholder="{{ trans('app.first_name') }}" value="{{ $user->first_name ?? '' }}" required  data-parsley-errors-container="#firstname-error">
                                        <div id="firstname-error" class="d-inline-block invalid-feedback pl-4"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-50">
                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-lastname-form">{{ trans('app.last_name') }}</label>
                                        <input id="brk-lastname-form" name="last_name" type="text" placeholder="{{ trans('app.last_name') }}" value="{{ $user->last_name ?? '' }}" required  data-parsley-errors-container="#lastname-error">
                                        <div id="lastname-error" class="d-inline-block invalid-feedback pl-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="brk-form p-5" style="width: 70%; margin: 0 auto;">
                            <div id="slim-cropper"
                                 class="slim"
                                 data-button-edit-title="Edit"
                                 data-button-cancel-title="Cancel"
                                 data-button-confirm-title="Confirm"
                                 data-label="{{ trans('app.drop_avatar') }}"
                                 data-min-size="60,60"
                                 data-crop="0,0,1000,1000"
                                 data-ratio="1:1">
                                <input type="file" id="avatar" name="avatar">
                                <img src="{{ $user->avatar_url ?? asset('custom/img/user-image.png') }}" alt="">
                            </div>
                            <div class="text-center mt-4">
                                <label for="avatar" style="font-weight: 600;font-size: 0.8rem;">{{ trans('app.change_file') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brk-form brk-form-round" data-brk-library="component__form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="gender">{{ trans('app.gender') }}</label>
                                <select id="gender" name="gender">
                                    <option value="" selected disabled hidden>{{ trans('app.choose_here') }}</option>
                                    <option value="M" @if($user->gender == 'M') selected @endif>{{ trans('app.male') }}</option>
                                    <option value="F" @if($user->gender == 'F') selected @endif>{{ trans('app.female') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="date-id-round">{{ trans('app.birth_date') }}</label>
                                <input id="date-id-round" class="brk-form-date" name="birth_date" type="date" value="{{ $user->birth_date ?? '' }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brk-form brk-form-round" data-brk-library="component__form">
                    <div class="row">
                        <div class="col-md-6 mb-50">
                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-pass-form">{{ trans('app.password') }}</label>
                            <input id="brk-pass-form" name="password" type="password" data-parsley-equalto="#brk-confirm-pass-form" data-parsley-errors-container="#pass-error" data-parsley-error-message="{{ trans('app.save_as_pass_message') }}" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;">
                        </div>
                        <div class="col-md-6 mb-50">
                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-confirm-pass-form">{{ trans('app.confirm_password') }}</label>
                            <input id="brk-confirm-pass-form" name="password_confirmation" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;">
                            <div id="pass-error" class="d-inline-block invalid-feedback pl-4"></div>
                        </div>
                    </div>
                </div>
                @include('partials._alert',['hide' => true])
                <div class="text-center pt-70">
                    {{--font__family-open-sans--}}
                    <button type="submit" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-25 font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
                        <span class="before">{{ trans('app.save') }}</span>
                        <span class="text">{{ trans('app.click_me') }}</span>
                        <span class="after">{{ trans('app.save') }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('custom/plugin/parsley.js/parsley.min.js') }}"></script>
    <script src="{{ asset("custom/plugin/parsley.js/i18n/$lang.js") }}"></script>
    <script src="{{ asset('custom/plugin/slim-cropper/slim/slim.jquery.js') }}"></script>
    <script src="{{ asset('custom/js/form.js') }}"></script>
@endsection
