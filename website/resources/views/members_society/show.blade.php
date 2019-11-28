@extends('layouts.app')

@section('title',trans('app.title_members_society'))

@include('_about_society_style')

@section('content')
    @include('partials._breadcrumbs',[
        'title' => $member->username,
        'paths' => [
            ['url' => RouteUrls::membersSociety(), 'title' => trans('app.members_society')]
        ],
        'banner' => asset('img/syssr/members-banner.jpg')
    ])
    <div class="main-wrapper" xmlns="" xmlns="">
        <main class="main-container pb-50 pt-70">
            <section>
                <div class="container">
                </div>
            </section>
        </main>
    </div>
@endsection
