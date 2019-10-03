@extends('layouts.master')

@section('title', trans('users::main.new_user'))

@section('css')
    <link href="{{ asset('theme/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">{{trans('users::main.new_user')}}</h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="kt-subheader__group" id="kt_subheader_search">
                        <span class="kt-subheader__desc" id="kt_subheader_total">{{trans('users::main.enter_user_details')}}</span>
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <a href="{{url('users/')}}" class="btn btn-default btn-bold">{{trans('cms.back')}}</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">{{trans('cms.actions')}}</button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-plus"></i>
                                        <span class="kt-nav__link-text">{{trans('cms.save_add_new')}}</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-save"></i>
                                        <span class="kt-nav__link-text">{{trans('cms.save_exit')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-wizard-v4" id="kt_user_add_user">

                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid">
                            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                <!--begin: Form Wizard Form-->
                                <form class="kt-form" id="kt_user_add_form" style="width:80%">

                                    <!--begin: Form Wizard Step 1-->
                                    <div class="kt-wizard-v4__content">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-wizard-v4__form">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="kt-section__body">
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.profile_photo')}}</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                                                        <div class="kt-avatar__holder"></div>
                                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="{{trans('users::main.change_profile_photo')}}">
                                                                            <i class="fa fa-pen"></i>
                                                                            <input type="file" name="profile_photo">
                                                                        </label>
                                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="{{trans('users::main.remove_profile_photo')}}">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.first_name')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="first_name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.last_name')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="last_name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.username')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="username">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.email')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                        <input type="email" class="form-control" name="email">
                                                                    </div>
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
                                        <button class="btn btn-primary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"><i class="fa fa-plus"></i> {{trans('cms.save_add_new')}}</button>
                                        <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"><i class="fa fa-save"></i> {{trans('cms.save_exit')}}</button>
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

@endsection

@section('js')
<script>
    var initUserForm = function() {
		avatar = new KTAvatar('kt_user_add_avatar');
	}
    $(function(){
        initUserForm();
    });
</script>
@stop