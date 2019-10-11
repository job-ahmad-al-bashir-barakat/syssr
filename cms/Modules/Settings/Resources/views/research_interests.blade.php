@extends('layouts.master')

@section('title', trans('cms.research_interests'))

@section('content')

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('cms.research_interests')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="Javascript::void(0);" class="btn btn-label-brand btn-bold">{{trans('cms.add')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    </div>
    <!-- end:: Content -->

@endsection

@section('js')

    <script>
        
    </script>

@stop