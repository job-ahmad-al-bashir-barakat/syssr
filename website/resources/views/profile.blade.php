@extends('layouts.app')

@section('title', trans('app.title_profile'))

@section('style')
    <style>.magazine-big-font{background-image:url(img/demo_magazine/1222x167_1.jpg);font-size: 156px;line-height: 156px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 767px){.magazine-big-font{font-size: 66px;line-height: 70px;}}</style>
    <link rel="stylesheet" href="{{ asset('custom/plugin/slim-cropper/slim/slim.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/intl-tel-input/css/intlTelInput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/summernote/summernote-bs4.css') }}">
    <style>
        .iti { width: 100%; }
        .iti__selected-flag {
            outline: none;
            padding: 0 25px 0 25px;
            border-radius: 50px 0 0 50px;
        }
        .iti__country-list {
            z-index: 999;
        }

        .iti.iti--container {
            width: 90%;
        }
        .iti-mobile .iti--container {
            left: 5%;
            right: 5%;
        }

/*
        .label-info {
            background-color: #5bc0de;
        }
        .label {
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25em;
        }
        .bootstrap-tagsinput .tag [data-role="remove"] {
            margin-left: 8px;
            cursor: pointer;
        }
        .bootstrap-tagsinput .tag [data-role="remove"]:after {
            content: "x";
            padding: 0px 2px;
        }*/
    </style>
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
    <div class="main-wrapper">
        <main class="main-container">
            <h1 class="sr-only">Profile</h1>
            <div class="pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
                <div class="container">
                    <form id="form-profile" class="form-ajax" enctype="multipart/form-data" method="POST" action="{{ $cms_api_url . 'member/' . Auth::id() }}" data-parsley-validate>
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="brk-tabs brk-tabs-simple" data-hash="true" data-brk-library="component__tabs">
                            <ul class="brk-tabs-nav font__family-montserrat font__weight-bold">
                                <li class="brk-tab active"><span>{{ trans('app.general') }}</span></li>
                                <li class="brk-tab"><span>{{ trans('app.social_links') }}</span></li>
                                <li class="brk-tab"><span>{{ trans('app.other') }}</span></li>
                            </ul>
                            <div class="brk-tabs-content">
                                <div class="brk-tab-item text-center text-lg-left">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-username-form">{{ trans('app.username') }}</label>
                                                            <input id="brk-username-form" name="username" type="text" placeholder="{{ trans('app.username') }}" value="{{ $user->username ?? '' }}" required data-parsley-errors-container="#username-error">
                                                            <div id="username-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="bio-id-round">{{ trans('app.bio') }}</label>
                                                            <textarea id="bio-id-round" class="brk-form-bio" name="bio" rows="6" value="{{ $user->bio ?? '' }}"></textarea>
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
                                                             data-max-file-size="2"
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
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-email-form">{{ trans('app.email') }}</label>
                                                            <input id="brk-email-form" name="email" type="email" placeholder="{{ trans('app.email') }}" value="{{ $user->email ?? '' }}" required  data-parsley-errors-container="#email-error">
                                                            <div id="email-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="date-id-round">{{ trans('app.birth_date') }}</label>
                                                            <input id="date-id-round" class="brk-form-date" name="birth_date" type="date" value="{{ $user->birth_date ?? '' }}">
                                                            <div id="birth_date-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="gender">{{ trans('app.gender') }}</label>
                                                            <select id="gender" name="gender">
                                                                <option value="" selected disabled hidden>{{ trans('app.choose_here') }}</option>
                                                                <option value="M" @if($user->gender == 'M') selected @endif>{{ trans('app.male') }}</option>
                                                                <option value="F" @if($user->gender == 'F') selected @endif>{{ trans('app.female') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="mobile-id-round">{{ trans('app.mobile') }}</label>
                                                            <input id="mobile-id-round" class="brk-form-mobile" name="mobile" type="text" value="{{ $user->mobile ?? '' }}" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="website-id-round">{{ trans('app.website') }}</label>
                                                            <input id="website-id-round" dir="ltr" class="brk-form-mobile" name="website" type="text" value="{{ $user->website ?? '' }}" placeholder="http://www.website.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="row">
                                                    <div class="col-md-6 mb-50">
                                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-date-of-join-form">{{ trans('app.date_of_join') }}</label>
                                                        <input id="brk-date-of-join-form" type="text" value="{{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}" disabled>
                                                    </div>
                                                    <div class="col-md-6 mb-50">
                                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-society-email-address-form">{{ trans('app.society_email_address') }}</label>
                                                        <input id="brk-society-email-address-form" type="text" disabled>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="brk-tab-item text-center text-lg-left">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="mb-50">
                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-facebook-form">Facebook</label>
                                                    <input id="brk-facebook-form" dir="ltr" name="facebook" type="text" placeholder="https://facebook.com/" value="{{ $user->facebook ?? 'https://www.facebook.com/' }}">
                                                </div>

                                                <div class="mb-50">
                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-linked-in-form">LinkedIn</label>
                                                    <input id="brk-linked-in-form" dir="ltr" name="linked_in" type="text" placeholder="https://linkedin.com/" value="{{ $user->linked_in ?? 'https://linkedin.com/' }}">
                                                </div>

                                                <div class="mb-50">
                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-github-form">GitHub</label>
                                                    <input id="brk-github-form" dir="ltr" name="github" type="text" placeholder="https://github.com/" value="{{ $user->github ?? 'https://github.com/' }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="brk-tab-item text-center text-lg-left">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="country">{{ trans('app.country') }}</label>
                                                            <select id="country" name="country" data-search="true" data-search-not-found="Not Found" data-search-placeholder="{{ trans('app.search_here') }}">
                                                                @foreach($country as $item)
                                                                    <option value="{{ $item->code }}" data-code="{{ $item->code }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="city">{{ trans('app.city') }}</label>
                                                            <select id="city" name="city"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="research-interests">{{ trans('app.research_interests') }}</label>
                                                            <input id="research-interests" name="research_interests" type="text" data-role="tagsinput"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="skills">{{ trans('app.skills') }}</label>
                                                            <input id="skills" name="skills" type="text" data-role="tagsinput"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="degrees">{{ trans('app.degrees') }}</label>
                                                            <input id="degrees" name="degrees" type="text" data-role="tagsinput"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="association">{{ trans('app.association') }}</label>
                                                            <input id="association" name="association" type="text" data-role="tagsinput"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="current-occupation">{{ trans('app.current_occupation') }}</label>
                                                            <select id="current-occupation" name="current_occupation" data-search="true" data-search-not-found="Not Found" data-search-placeholder="{{ trans('app.search_here') }}">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="current-occupation">{{ trans('app.current_occupation') }}</label>
                                                            <input type="file" id="resume" name="resume">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="current-occupation">{{ trans('app.publications') }}</label>
                                                            <textarea id="summernote" name="publications" cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-20">
                                @include('partials._alert',['hide' => true])
                            </div>
                            <div class="text-center pt-70">
                                {{--font__family-open-sans--}}
                                <button type="submit" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-25 font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
                                    <span class="before">{{ trans('app.save') }}</span>
                                    <span class="text">{{ trans('app.click_me') }}</span>
                                    <span class="after">{{ trans('app.save') }}</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('script')
    <script src="{{ asset('custom/plugin/parsley.js/parsley.min.js') }}"></script>
    <script src="{{ asset("custom/plugin/parsley.js/i18n/$lang.js") }}"></script>
    <script src="{{ asset('custom/plugin/slim-cropper/slim/slim.jquery.js') }}"></script>
    <script src="{{ asset('custom/plugin/intl-tel-input/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('custom/plugin/Inputmask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('custom/plugin/Inputmask/bindings/inputmask.binding.js') }}"></script>
    <script src="{{ asset('custom/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('custom/plugin/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('custom/js/form.js') }}"></script>
    <script>z
        // https://github.com/nosir/cleave.js
        // https://catamphetamine.github.io/libphonenumber-js/
        jQuery(function () {
            var intlTelInputFixPadding = function () {
                var iti = jQuery('.iti');
                var width = iti.find('.iti__flag-container').width();
                iti.find('input').css('padding-left', width > 0 ? (parseInt(width) + 20) + 'px' : '120px' );
            };
            var input = window.intlTelInput( document.querySelector(".brk-form-mobile"),{
                allowExtensions: true,
                autoFormat: false,
                allowDropdown: true,
                separateDialCode: true,
                initialCountry: "auto",
                hiddenInput: 'mobile_full',
                utilsScript: "custom/plugin/intl-tel-input/js/utils.js",
                geoIpLookup: function(success, failure) {
                    jQuery.get("http://www.geoplugin.net/json.gp", function(res) {
                        var countryCode = (res && res.geoplugin_countryCode) ? res.geoplugin_countryCode : "";
                        success(countryCode);
                    }).fail(function () {
                        success('US')
                    });
                },
                customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    jQuery('.brk-form-mobile').inputmask(selectedCountryPlaceholder.replace(/\d/g,'9').replace(/-/g,' '), {
                        "placeholder": ' ',
                    });
                    intlTelInputFixPadding();
                    return selectedCountryPlaceholder;
                }
            }).promise.then(function () {
                intlTelInputFixPadding();
            });
        });
    </script>
    <script src="{{ asset('custom/plugin/intl-tel-input/js/utils.js') }}"></script>
@endsection
