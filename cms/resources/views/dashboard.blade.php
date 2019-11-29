@extends('layouts.master')

@section('title',trans('cms.dashboard'))

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="fa fa-info"></i></div>
        <div class="alert-text">
            {{trans('cms.welcome_to_dashboard')}}
        </div>
    </div>
</div>

@endsection