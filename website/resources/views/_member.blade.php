@section('style')
    <style>.magazine-big-font{background-image:url(img/demo_magazine/1222x167_1.jpg);font-size: 156px;line-height: 156px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 767px){.magazine-big-font{font-size: 66px;line-height: 70px;}}</style>
    <link rel="stylesheet" href="{{ asset('custom/plugin/slim-cropper/slim/slim.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/intl-tel-input/css/intlTelInput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/bootstrap-tagsinput/bootstrap4-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugin/air-datepicker/css/datepicker.min.css') }}">
@endsection

@section('content')
    <div class="breadcrumbs__section breadcrumbs__section-grayscale pt-130 pb-60 bg__style lazyload" data-bg="{{$banner_url}}" data-brk-library="component__breadcrumbs_css">
        <div class="full__size-absolute brk-bg-black opacity-70"></div>
        <div class="container">
            <div class="breadcrumbs__wrapper align-items-center">
                <div class="pull-left text-left" data-brk-library="component__title">
                    <h2 class="brk-white-font-color font__size-36 line__height-50 font__family-montserrat-alt font__weight-bold">{{ $title }}</h2>
                </div>
                <ol class="breadcrumb pull-right font__size-14 font__weight-bold font__family-montserrat">
                    <li><a href="{{ RouteUrls::home() }}">{{ trans('app.home') }} <i class="fas fa-arrow-right"></i></a></li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="main-wrapper">
        <main class="main-container">
            <h1 class="sr-only">Profile</h1>
            <div class="pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
                <div class="container">
                    <form id="form-profile" class="form-ajax" enctype="multipart/form-data" method="POST" action="{{ $update ? RouteUrls::putDataMember() : RouteUrls::postDataMember() }}" data-parsley-validate>
                        @csrf
                        @if($update)
                            <input type="hidden" name="_method" value="PUT">
                        @endif
                        <div class="brk-tabs tabs brk-tabs-simple" data-hash="true" data-brk-library="component__tabs">
                            <ul class="brk-tabs-nav font__family-montserrat font__weight-bold">
                                <li data-tab="tab-1" class="brk-tab active"><span>{{ trans('app.personal_info') }}</span><span class="req" style="margin-right: 10px;"></span></li>
                                <li data-tab="tab-2" class="brk-tab"><span>{{ trans('app.address') }}</span><span class="req" style="margin-right: 10px;"></span></li>
                                <li data-tab="tab-3" class="brk-tab"><span>{{ trans('app.resume') }}</span></li>
                                <li data-tab="tab-4" class="brk-tab"><span>{{ trans('app.social_links') }}</span></li>
                            </ul>
                            <div class="brk-tabs-content">
                                <div id="tab-1" class="brk-tab-item tab text-center text-lg-left">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-username-form">{{ trans('app.username') }} <span class="req"></span></label>
                                                            <input id="brk-username-form" name="username" type="text" placeholder="{{ trans('app.username') }}" value="{{ $user->username ?? '' }}" required data-parsley-errors-container="#username-error">
                                                            <div id="username-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="bio-id-round">{{ trans('app.bio') }}</label>
                                                            <textarea id="bio-id-round" class="brk-form-bio" name="bio" rows="6">{{ $user->bio ?? '' }}</textarea>
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
                                                            <img src="{{ $user->avatar_url ?? asset('custom/img/user-image.png') }}" alt="avatar">
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
                                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-firstname-form">{{ trans('app.first_name') }} <span class="req"></span></label>
                                                                    <input id="brk-firstname-form" name="first_name" type="text" placeholder="{{ trans('app.first_name') }}" value="{{ $user->first_name ?? '' }}" required  data-parsley-errors-container="#firstname-error">
                                                                    <div id="firstname-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-50">
                                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-lastname-form">{{ trans('app.last_name') }} <span class="req"></span></label>
                                                                    <input id="brk-lastname-form" name="last_name" type="text" placeholder="{{ trans('app.last_name') }}" value="{{ $user->last_name ?? '' }}" required  data-parsley-errors-container="#lastname-error">
                                                                    <div id="lastname-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-email-form">{{ trans('app.email') }} <span class="req"></span></label>
                                                            <input id="brk-email-form" name="email" type="email" placeholder="{{ trans('app.email') }}" value="{{ $user->email ?? '' }}" required  data-parsley-errors-container="#email-error">
                                                            <div id="email-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="date-id-round">{{ trans('app.birth_date') }}</label>
                                                            <input id="date-id-round" class="air-datepicker" data-language="{{$lang}}" name="birth_date" type="text" value="{{ $user->birth_date ?? '' }}">
                                                            <div class="d-inline-block"></div>
                                                        </div>
                                                    </div>
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
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="website-id-round">{{ trans('app.personal_website') }}</label>
                                                            <input id="website-id-round" dir="ltr" class="brk-form-website" name="website" type="text" value="{{ $user->website ?? 'http://' }}" placeholder="http://www.website.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($update)
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="row">
                                                    <div class="col-md-6 mb-50">
                                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-date-of-join-form">{{ trans('app.date_of_join') }}</label>
                                                        <input id="brk-date-of-join-form" type="text" value="{{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}" disabled>
                                                    </div>
                                                    @isset($user->society_email)
                                                    <div class="col-md-6 mb-50">
                                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-society-email-address-form">{{ trans('app.society_email_address') }}</label>
                                                        <input id="brk-society-email-address-form" type="text" value="{{ $user->society_email ?? ''  }}" readonly>
                                                    </div>
                                                    @endisset
                                                </div>
                                            </div>
                                            @endif
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="row">
                                                    @if($update)
                                                        <div class="col-md-6 mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-pass-form">{{ trans('app.password') }}</label>
                                                            <input id="brk-pass-form" name="password" type="password" data-parsley-equalto="#brk-confirm-pass-form" data-parsley-errors-container="#pass-error" data-parsley-error-message="{{ trans('app.save_as_pass_message') }}" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;">
                                                        </div>
                                                        <div class="col-md-6 mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-confirm-pass-form">{{ trans('app.confirm_password') }}</label>
                                                            <input id="brk-confirm-pass-form" name="password_confirmation" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;">
                                                            <div id="pass-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                    @else
                                                        <div class="col-md-6 mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-pass-form">{{ trans('app.password') }} <span class="req"></span></label>
                                                            <input id="brk-pass-form" name="password" type="password" required data-parsley-errors-container="#password-error" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;">
                                                            <div id="password-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                        <div class="col-md-6 mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-confirm-pass-form">{{ trans('app.confirm_password') }} <span class="req"></span></label>
                                                            <input id="brk-confirm-pass-form" name="password_confirmation" type="password" data-parsley-equalto="#brk-pass-form" data-parsley-error-message="{{ trans('app.save_as_pass_message') }}" data-parsley-errors-container="#confirm-pass-error" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;">
                                                            <div id="confirm-pass-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="brk-tab-item tab text-center text-lg-left">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="country">{{ trans('app.country') }} <span class="req"></span></label>
                                                            <select id="country" name="country" data-search="true" data-search-not-found="{{ trans('app.not_found') }}" data-search-placeholder="{{ trans('app.search_here') }}" required  data-parsley-errors-container="#country-error">
                                                                <option value="" selected disabled hidden>{{ trans('app.choose_here') }}</option>
                                                                @foreach($country as $item)
                                                                    <option value="{{ $item->id }}" data-code="{{ $item->code }}" {{ $item->id == $user->country_id ? 'selected' : '' }} >{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div id="country-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="city">{{ trans('app.city') }} <span class="req"></span></label>
                                                            <select id="city" name="city" data-search="true" data-search-not-found="{{ trans('app.not_found') }}" data-search-placeholder="{{ trans('app.search_here') }}" @if(!$user->city_id) disabled @endif  required  data-parsley-errors-container="#city-error">
                                                                @if($user->city_id)
                                                                    <option value="" selected disabled hidden>{{ trans('app.choose_here') }}</option>
                                                                    @foreach($city as $item)
                                                                        <option value="{{ $item->id }}" {{ $item->id == $user->city_id ? 'selected' : '' }} >{{ $item->name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <div id="city-error" class="d-inline-block invalid-feedback pl-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="street-address">{{ trans('app.street_address') }}</label>
                                                            <input id="street-address" name="street_address" type="text" value="{{ $user->street_address ?? '' }}"/>
                                                            <input id="location-address" name="location_address" type="hidden" value="{{ $user->location ?? '' }}"/>
                                                            <input id="location-country-city" name="location_country_city" type="hidden" value="{{ $user->location ?? '' }}"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="brk-tab-item tab text-center text-lg-left">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="research-interests">
                                                                {{ trans('app.research_interests') }}
                                                                <button class="icon__btn icon__btn-xs icon__btn-anim brk-library-rendered add-new-tag" title="{{ trans('app.add') . trans('app.research_interests') }}" data-brk-library="component__button" data-title="{{ trans('app.research_interests') }}" data-action="{{ RouteUrls::setDataSettings('researchInterests') }}" data-target=".modal">
                                                                    <i class="fa fa-plus icon-inside" aria-hidden="true"></i>
                                                                    <span class="before"></span>
                                                                    <span class="after"></span>
                                                                </button>
                                                            </label>
                                                            <input id="research-interests" name="research_interests" type="text" class="tagsinput" data-remote="{{ RouteUrls::getDataSettings('researchInterests') }}" value="" data-value="{{ Helpers::objectTags($user->research_interests) }}"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="skills">
                                                                {{ trans('app.skills') }}
                                                                <button class="icon__btn icon__btn-xs icon__btn-anim brk-library-rendered add-new-tag" title="{{ trans('app.add') . trans('app.skills') }}"  data-brk-library="component__button" data-title="{{ trans('app.skills') }}" data-action="{{ RouteUrls::setDataSettings('skills') }}" data-target=".modal">
                                                                    <i class="fa fa-plus icon-inside" aria-hidden="true"></i>
                                                                    <span class="before"></span>
                                                                    <span class="after"></span>
                                                                </button>
                                                            </label>
                                                            <input id="skills" name="skills" type="text" class="tagsinput" data-remote="{{ RouteUrls::getDataSettings('skills') }}" data-value="{{ Helpers::objectTags($user->skills) }}"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="degrees">
                                                                {{ trans('app.degrees') }}
                                                                <button class="icon__btn icon__btn-xs icon__btn-anim brk-library-rendered add-new-tag" title="{{ trans('app.add') . trans('app.degrees') }}" data-brk-library="component__button"  data-title="{{ trans('app.degrees') }}" data-action="{{ RouteUrls::setDataSettings('degrees') }}" data-target=".modal">
                                                                    <i class="fa fa-plus icon-inside" aria-hidden="true"></i>
                                                                    <span class="before"></span>
                                                                    <span class="after"></span>
                                                                </button>
                                                            </label>
                                                            <input id="degrees" name="degrees" type="text" class="tagsinput" data-remote="{{ RouteUrls::getDataSettings('degrees') }}" data-value="{{ Helpers::objectTags($user->degrees) }}"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="associations">
                                                                {{ trans('app.association') }}
                                                                <button class="icon__btn icon__btn-xs icon__btn-anim brk-library-rendered add-new-tag" title="{{ trans('app.add') . trans('app.association') }}"  data-brk-library="component__button"  data-title="{{ trans('app.association') }}" data-action="{{ RouteUrls::setDataSettings('associations') }}" data-target=".modal">
                                                                    <i class="fa fa-plus icon-inside" aria-hidden="true"></i>
                                                                    <span class="before"></span>
                                                                    <span class="after"></span>
                                                                </button>
                                                            </label>
                                                            <input id="associations" name="associations" type="text" class="tagsinput" data-remote="{{ RouteUrls::getDataSettings('associations') }}" data-value="{{ Helpers::objectTags($user->associations) }}"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="current-occupation">
                                                                {{ trans('app.current_occupation') }}
                                                                <button class="icon__btn icon__btn-xs icon__btn-anim brk-library-rendered add-new-tag" title="{{ trans('app.add') . trans('app.occupation') }}" data-brk-library="component__button"  data-title="{{ trans('app.occupation') }}" data-action="{{ RouteUrls::setDataSettings('occupations') }}" data-target=".modal">
                                                                    <i class="fa fa-plus icon-inside" aria-hidden="true"></i>
                                                                    <span class="before"></span>
                                                                    <span class="after"></span>
                                                                </button>
                                                            </label>

                                                            <select id="current-occupation" name="current_occupation" data-search="true" data-search-not-found="{{ trans('app.not_found') }}" data-search-placeholder="{{ trans('app.search_here') }}" data-search-limit="1">
                                                                <option value="" hidden>{{ trans('app.choose_here') }}</option>
                                                                @foreach($occupation as $item)
                                                                    <option value="{{ $item->id }}" {{ $item->id == $user->occupation_id ? 'selected' : '' }}>{{ $item->name_lang }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="resume">
                                                                {{ trans('app.resume') }}
                                                                @if($user->resume_file_url)
                                                                    <a href="{{ $user->resume_file_url}}" class="resume_file_download icon__btn icon__btn-xs icon__btn-anim brk-library-rendered" data-brk-library="component__button" download title="{{ trans('app.download_file') }}">
                                                                        <i class="fa fa-arrow-down icon-inside" aria-hidden="true"></i>
                                                                        <span class="before"></span>
                                                                        <span class="after"></span>
                                                                    </a>
                                                                @endif
                                                            </label>
                                                            <input type="file" id="resume" name="resume_file" accept="application/pdf">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-50">
                                                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="publications">{{ trans('app.publications') }}</label>
                                                            <textarea id="publications" class="summernote" name="publications" cols="30" rows="10">{{ $user->publications ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="brk-tab-item tab text-center text-lg-left">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="brk-form brk-form-round" data-brk-library="component__form">
                                                <div class="mb-50">
                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-facebook-form">Facebook</label>
                                                    <div class="brk-form-date-wrap">
                                                        <input id="brk-facebook-form" dir="ltr" name="facebook" type="text" placeholder="https://facebook.com/{your-id}" value="{{ $user->facebook ?? '' }}" style="padding-left: 55px;">
                                                        <span class="icon-before facebook-bg-color" style="left:7px;">
                                                            <i class="fab fa-facebook-f" style="font-size: 1.5rem;"></i>
                                                        </span>
                                                    </div>                                                   
                                                </div>

                                                <div class="mb-50">
                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-linked-in-form">LinkedIn</label>
                                                    <div class="brk-form-date-wrap">
                                                        <input id="brk-linked-in-form" dir="ltr" name="linked_in" type="text" placeholder="https://linkedin.com/in/{your-id}" value="{{ $user->linked_in ?? '' }}" style="padding-left: 55px;">
                                                        <span class="icon-before linkedin-bg-color" style="left:7px;">
                                                            <i class="fab fa-linkedin-in" style="font-size: 1.5rem;"></i>
                                                        </span>
                                                    </div>                                                    
                                                </div>

                                                <div class="mb-50">
                                                    <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-github-form">GitHub</label>
                                                    <div class="brk-form-date-wrap">
                                                        <input id="brk-github-form" dir="ltr" name="github" type="text" placeholder="https://github.com/{your-id}" value="{{ $user->github ?? '' }}" style="padding-left: 55px;">
                                                        <span class="icon-before github-bg-color" style="left:7px;">
                                                            <i class="fab fa-github" style="font-size: 1.5rem;"></i>
                                                        </span>
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
                                <button type="submit" class="btn btn-gradient btn-lg border-radius-10 font__weight-bold brk-white-font-color btn-min-width-200" data-brk-library="component__button">
                                    @if($update)
                                        <i class="fa fa-edit icon-inside" aria-hidden="true"></i>
                                        <span>{{ trans('app.update') }}</span>
                                    @else
                                        <i class="fa fa-save icon-inside" aria-hidden="true"></i>
                                        <span>{{ trans('app.save') }}</span>
                                    @endif
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
    @component('partials._modal',['form' => true])
        <div class="brk-form brk-form-round" data-brk-library="component__form">
            @foreach(LaravelLocalization::getSupportedLocales() as $lang_var => $item)

                <div class="row">
                    <div class="col-md-12">
                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-name-{{ $lang_var }}-form">{{ trans("app.name") }} ( {{ $item['native'] }} ) <span class="req"></span></label>
                        <input id="brk-name-{{ $lang_var }}-form" name="data[name_{{ $lang_var }}]" type="text" @if($lang_var=='ar') dir="rtl" @endif placeholder="{{ trans("app.name") }} ( {{ $item['native'] }} )" @if(LaravelLocalization::getDefaultLocale() == $lang_var) required data-parsley-errors-container="#name-{{$lang_var}}-error" @endif>
                        @if(LaravelLocalization::getDefaultLocale() == $lang_var)
                            <div id="name-{{ $lang_var }}-error" class="d-inline-block invalid-feedback pl-4"></div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endcomponent

    <script src="{{ asset('custom/plugin/air-datepicker/js/datepicker.min.js') }}"></script>
    <script src="{{ asset("custom/plugin/air-datepicker/js/i18n/datepicker.$lang.js") }}"></script>

    <script src="{{ asset('custom/plugin/parsley.js/parsley.min.js') }}"></script>
    <script src="{{ asset("custom/plugin/parsley.js/i18n/$lang.js") }}"></script>

    <script src="{{ asset('custom/plugin/slim-cropper/slim/slim.jquery.js') }}"></script>

    <script src="{{ asset('custom/plugin/intl-tel-input/js/intlTelInput.min.js') }}"></script>

    <script src="{{ asset('custom/plugin/Inputmask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('custom/plugin/Inputmask/bindings/inputmask.binding.js') }}"></script>

    <script src="{{ asset('custom/plugin/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('custom/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ asset('custom/plugin/summernote/summernote-bs4.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDacJcoyPCr-jdlP9HK93h3YKNyf710J0&libraries=places"></script>
    <script src="{{ asset('custom/plugin/google-address-autocomplete/google-address-autocomplete.min.js') }}"></script>

    <script src="{{ asset('custom/js/form.js') }}"></script>
    <script src="{{ asset('custom/plugin/intl-tel-input/js/utils.js') }}"></script>
@endsection
