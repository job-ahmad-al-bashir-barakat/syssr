@extends('layouts.master')

@section('title', trans('members::main.edit_member'))

@section('css')
    <link href="{{ asset('theme/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">{{trans('members::main.edit_member')}}</h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                </div>
                <div class="kt-subheader__toolbar">
                    <a href="{{url('users')}}" class="btn btn-default btn-bold">{{trans('cms.back')}}</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">{{trans('cms.actions')}}</button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="JavaScript:Void(0);" class="kt-nav__link update">
                                        <i class="kt-nav__link-icon fa fa-edit"></i>
                                        <span class="kt-nav__link-text">{{trans('cms.update')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--tabs">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                         class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon id="Bound" points="0 0 24 0 24 24 0 24"/>
                                            <path
                                                d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                id="Shape" fill="#000000" fill-rule="nonzero"/>
                                            <path
                                                d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                id="Path" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2" role="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                         class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                            <path
                                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path
                                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                id="Mask-Copy" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                    Account
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                         class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                id="Path-50" fill="#000000" opacity="0.3"/>
                                            <path
                                                d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                id="Mask" fill="#000000" opacity="0.3"/>
                                            <path
                                                d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                id="Mask-Copy" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    Change Password
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_4" role="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                                            <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" id="Combined-Shape" fill="#000000"/>
                                        </g>
                                    </svg>
                                    Address
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_5" role="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                                            <path d="M4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
                                            <path d="M18.5,11 L5.5,11 C4.67157288,11 4,11.6715729 4,12.5 L4,13 L8.58578644,13 C8.85100293,13 9.10535684,13.1053568 9.29289322,13.2928932 L10.2928932,14.2928932 C10.7456461,14.7456461 11.3597108,15 12,15 C12.6402892,15 13.2543539,14.7456461 13.7071068,14.2928932 L14.7071068,13.2928932 C14.8946432,13.1053568 15.1489971,13 15.4142136,13 L20,13 L20,12.5 C20,11.6715729 19.3284271,11 18.5,11 Z" id="Path" fill="#000000"/>
                                            <path d="M5.5,6 C4.67157288,6 4,6.67157288 4,7.5 L4,8 L20,8 L20,7.5 C20,6.67157288 19.3284271,6 18.5,6 L5.5,6 Z" id="Path" fill="#000000"/>
                                        </g>
                                    </svg>
                                    Resume (CV)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_6" role="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                                            <path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z" id="Path-57" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z" id="Shape" fill="#000000" fill-rule="nonzero" transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129) "/>
                                        </g>
                                    </svg>
                                    Social Links
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
               <form id="userForm" method="post" action="{{ route('users.update', $user->id) }}" class="kt-form">

                    @method('PUT')
                    @csrf

                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                                <div class="kt-form kt-form--label-right">
                                    <div class="kt-form__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h3 class="kt-section__title kt-section__title-sm">Personal Info:</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                                             id="kt_user_edit_avatar">
                                                            <div class="kt-avatar__holder"
                                                                 style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/assets/media/users/300_20.jpg&quot;);"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                                   title="" data-original-title="Change avatar">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="profile_avatar"
                                                                       accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                                  title="" data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Bio</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <textarea class="form-control" rows="6"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control" type="text" value="Nick">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control" type="text" value="Bold">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Birth Date</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control" type="text" value="Loop Inc.">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="kt-checkbox-inline">
                                                            <label class="kt-checkbox">
                                                                <input type="radio" name="radio" id="radio"> Male
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-checkbox">
                                                                <input type="radio" name="radio" id="radio"> Female
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Mobile</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i class="la la-phone"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="+35278953712"
                                                                   placeholder="Phone" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Society Email</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="la la-at"></i></span></div>
                                                            <input type="text" class="form-control"
                                                                   value="nick.bold@loop.com" placeholder="Email"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Personal Website</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="la la-link"></i></span></div>
                                                            <input type="text" class="form-control"
                                                                   value="www.website.com" placeholder="Personal Website"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Date Of Join</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control" type="text" value="1-1-1992">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="kt_user_edit_tab_2" role="tabpanel">
                                <div class="kt-form kt-form--label-right">
                                    <div class="kt-form__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h3 class="kt-section__title kt-section__title-sm">Account:</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div
                                                            class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                            <input class="form-control" type="text" value="nick84">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Email
                                                        Address</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="la la-at"></i></span></div>
                                                            <input type="text" class="form-control"
                                                                   value="nick.watson@loop.com" placeholder="Email"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-group-last row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Deactivate</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <button type="button"
                                                                class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">
                                                            Deactivate account ?
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="kt_user_edit_tab_3" role="tabpanel">
                                <div class="kt-form kt-form--label-right">
                                    <div class="kt-form__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h3 class="kt-section__title kt-section__title-sm">Change Your Password:</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Current
                                                        Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control" value=""
                                                               placeholder="Current password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control" value=""
                                                               placeholder="New password">
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Verify
                                                        Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control" value=""
                                                               placeholder="Verify password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="kt_user_edit_tab_6" role="tabpanel">
                                <div class="kt-form kt-form--label-right">
                                    <div class="kt-form__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h3 class="kt-section__title kt-section__title-sm">Change Social Links:</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Facebook</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="" placeholder="Facebook Page" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">LinkedIn</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i class="fab fa-linkedin-in"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="" placeholder="Linkedin Page" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">GitHub</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i class="fab fa-github"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="" placeholder="Github Page" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-label-brand btn-bold update">Save changes</button>
                                    <button type="reset" class="btn btn-clean btn-bold">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end:: Content -->
    </div>





{{--
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-wizard-v4" id="kt_user_add_user">

                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid">
                            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                <!--begin: Form Wizard Form-->
                                <form id="userForm" method="post" action="{{ route('users.update', $user->id) }}"
                                      class="kt-form" style="width:80%">

                                @method('PATCH')
                                @csrf

                                <!--begin: Form Wizard Step 1-->
                                    <div class="kt-wizard-v4__content">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-wizard-v4__form">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="kt-section__body">
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.profile_photo')}}</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <div class="kt-avatar kt-avatar--outline"
                                                                         id="kt_user_add_avatar">
                                                                        <div class="kt-avatar__holder"></div>
                                                                        <label class="kt-avatar__upload"
                                                                               data-toggle="kt-tooltip"
                                                                               title="{{trans('users::main.change_profile_photo')}}">
                                                                            <i class="fa fa-pen"></i>
                                                                            <input type="file" name="profile_photo">
                                                                        </label>
                                                                        <span class="kt-avatar__cancel"
                                                                              data-toggle="kt-tooltip"
                                                                              title="{{trans('users::main.remove_profile_photo')}}">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.first_name')}}
                                                                    *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="text" name="first_name"
                                                                           value="@error('first_name') {!!old('first_name')!!} @else {!! $user->first_name !!} @enderror"
                                                                           class="form-control req @error('first_name') is-invalid @enderror">
                                                                    @error('first_name')
                                                                    <div id="first_name-error"
                                                                         class="error invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.last_name')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="text" name="last_name"
                                                                           value="@error('last_name') {!!old('last_name')!!} @else {!! $user->last_name !!} @enderror"
                                                                           class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.username')}}
                                                                    *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="text" name="username"
                                                                           value="@error('username') {!!old('username')!!} @else {!! $user->username !!} @enderror"
                                                                           class="form-control req @error('username') is-invalid @enderror">
                                                                    @error('username')
                                                                    <div id="username-error"
                                                                         class="error invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.email')}}
                                                                    *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="email" name="email"
                                                                           value="@error('email') {!!old('email')!!} @else {!! $user->email !!} @enderror"
                                                                           class="form-control req email @error('email') is-invalid @enderror">
                                                                    @error('email')
                                                                    <div id="email-error"
                                                                         class="error invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard Step 1-->

                                    <!--begin: Form Actions -->
                                    <div class="kt-form__actions">
                                        <button type="button"
                                                class="update btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">
                                            <i class="fa fa-edit"></i> {{trans('cms.update')}}</button>
                                    </div>
                                    <!--end: Form Actions -->

                                </form>
                                <!--end: Form Wizard Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
--}}

@stop

@section('js')
    <script>
        //----------------------------------------------------------------------------------------//
        $(function () {
            var avatar = new KTAvatar('kt_user_add_avatar');
            //=================================================//
            $('.update').click(function () {
                submit_form();
            });
            //=================================================//
        });

        //----------------------------------------------------------------------------------------//
        function submit_form() {
            $("#userForm").validate();
            $("#userForm").submit();
        }

        //----------------------------------------------------------------------------------------//
    </script>
@stop
