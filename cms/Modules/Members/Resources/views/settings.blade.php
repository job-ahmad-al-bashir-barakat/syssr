@extends('layouts.master')

@section('title', trans('members::main.members_settings'))

@section('content')

    <!-- begin:: Content Head -->
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('members::main.members_settings')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="Javascript:void(0);" class="btn btn-label-brand btn-bold save-settings">{{trans('cms.save')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form class="kt-form">
            <!--begin::Portlet-->
            <div class="kt-portlet" data-ktportlet="true">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">{{trans('members::main.member_fields')}}</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-group">
                            <button type="button" class="btn btn-success btn-sm" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Public visibility: everyone can see">
                                Public
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Internal visibility: only logged in members can see">
                                Internal
                            </button>
                            <button type="button" class="btn btn-danger btn-sm mr-5" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Private visibility: only the member owner can see">
                                Private
                            </button>
                            <a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-portlet__content">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">First Name</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="first_name"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="first_name"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="first_name"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Last Name</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="last_name"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="last_name"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="last_name"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Personal Email</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="personal_email"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="personal_email"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="personal_email"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Society Email</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" name="society_email"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="society_email"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="society_email"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Personal Website</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="personal_website"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="personal_website"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="personal_website"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Mobile Phone</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="mobile_phone"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="mobile_phone"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="mobile_phone"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Social Links</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="social_links"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="social_links"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="social_links"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Location</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="location"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="location"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="location"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Research Interests</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="research_interests"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="research_interests"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="research_interests"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Skills</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="skills"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="skills"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="skills"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Degrees</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="degrees"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="degrees"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="degrees"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Associations</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="associations"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="associations"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="associations"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Current Occupation</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="current_occupation"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="current_occupation"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="current_occupation"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Member Bio</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="member_bio"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="member_bio"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="member_bio"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Publications</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="publications"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="publications"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="publications"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="kt-font-boldest">Resume (CV)</label>
                                <div class="kt-radio-list">
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--success">
                                            <input type="radio" checked="checked" name="resume"> Public
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--primary">
                                            <input type="radio" name="resume"> Internal
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col">
                                        <label class="kt-radio kt-radio--danger">
                                            <input type="radio" name="resume"> Private
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </form>
    </div>
    <!-- end:: Content -->

@endsection


@section('js')

@endsection