@extends('layouts.master')

@section('title', trans('users::main.edit_user'))

@section('css')
    <link href="{{ asset('theme/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">{{trans('users::main.edit_user')}}</h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                </div>
                <div class="kt-subheader__toolbar">
                    <a href="{{url('users')}}" class="btn btn-default btn-bold">{{trans('cms.back')}}</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">{{trans('cms.actions')}}</button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-wizard-v4" id="kt_user_add_user">

                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid">
                            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                <!--begin: Form Wizard Form-->
                                <form id="userForm" method="post" action="{{ route('users.update', $user->id) }}" class="kt-form"  style="width:80%">

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
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.first_name')}} *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="text" name="first_name" value="@error('first_name') {!!old('first_name')!!} @else {!! $user->first_name !!} @enderror" class="form-control req @error('first_name') is-invalid @enderror">
                                                                    @error('first_name')
                                                                        <div id="first_name-error" class="error invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.last_name')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="text" name="last_name" value="@error('last_name') {!!old('last_name')!!} @else {!! $user->last_name !!} @enderror" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.username')}} *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="text" name="username" value="@error('username') {!!old('username')!!} @else {!! $user->username !!} @enderror" class="form-control req @error('username') is-invalid @enderror">
                                                                    @error('username')
                                                                        <div id="username-error" class="error invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.email')}} *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="email" name="email" value="@error('email') {!!old('email')!!} @else {!! $user->email !!} @enderror" class="form-control req email @error('email') is-invalid @enderror">
                                                                    @error('email')
                                                                        <div id="email-error" class="error invalid-feedback">{{ $message }}</div>
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
                                        <button type="button" class="update btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"><i class="fa fa-edit"></i> {{trans('cms.update')}}</button>
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

@stop

@section('js')
<script>
    //----------------------------------------------------------------------------------------//
    $(function(){
        var avatar = new KTAvatar('kt_user_add_avatar');
        //=================================================//
        $('.update').click(function(){
            submit_form();
        });
        //=================================================//
    });
    //----------------------------------------------------------------------------------------//
    function submit_form(){
        $( "#userForm" ).validate();
        $( "#userForm" ).submit();
    }
    //----------------------------------------------------------------------------------------//
</script>
@stop
