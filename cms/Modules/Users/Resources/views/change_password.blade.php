@extends('layouts.master')

@section('title', trans('cms.change_password'))

@section('css')
    <link href="{{ asset('theme/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">{{trans('cms.change_password').' ('.$user->first_name.' '.$user->last_name.')'}}</h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                </div>
                <div class="kt-subheader__toolbar">
                    <a href="{{url()->previous()}}" class="btn btn-default btn-bold">{{trans('cms.back')}}</a>
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
                                <form id="userForm" method="post" action="{{ route('users.change_password') }}" class="kt-form"  style="width:80%">
                                    @csrf

                                    <!--begin: Form Wizard Step 1-->
                                    <div class="kt-wizard-v4__content">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-wizard-v4__form">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="kt-section__body">
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.old_password')}} *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="password" name="old_password" class="form-control req password @error('password') is-invalid @enderror">
                                                                    @error('password')
                                                                        <div id="password-error" class="error invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.password')}} *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="password" name="password" class="form-control req password @error('password') is-invalid @enderror">
                                                                    @error('password')
                                                                        <div id="password-error" class="error invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{trans('users::main.confirm_password')}} *</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input type="password" name="password_confirmation" class="form-control req password_confirmation">
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
                                        <button type="button" class="update btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"><i class="fa fa-exchange-alt"></i> {{trans('cms.change_password')}}</button>
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
        //=================================================//
        $('.update').click(function(){
            submit_form();
        });
        //=================================================//
    });
    //----------------------------------------------------------------------------------------//
    function submit_form(type){
        $( "#userForm" ).validate();
        $( "#userForm" ).submit();
    }
    //----------------------------------------------------------------------------------------//
</script>
@stop