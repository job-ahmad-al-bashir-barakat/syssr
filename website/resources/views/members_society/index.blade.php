@extends('layouts.app')

@section('title',trans('app.title_members_society'))

@component('_about_society_style')
    <link rel="stylesheet" href="{{ asset('custom/plugin/lity/lity.min.css') }}">
@endcomponent

@section('content')
    @include('partials._breadcrumbs',['title' => trans('app.members_society'), 'banner' => asset('img/syssr/members-banner.jpg')])
    <div class="main-wrapper" xmlns="" xmlns="">
        <main class="main-container pb-50 pt-70">
            <section>
                <div class="container">
                    <div class="brk-tables brk-tables-avatar brk-tables-strict font__family-montserrat brk-form-strict" data-brk-library="component__tables">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th class="active" style="width: 30px;" scope="col">Avatar <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">First Name <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">Last Name <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">Country <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">Detail <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($members)
                                    @foreach($members as $index => $member)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <a href="{{ $member->avatar_url }}" data-lity data-lity-target="{{ $member->avatar_url }}">
                                                <img class="table-avatar" src="{{ $member->avatar_url }}" alt="{{ $member->first_name }}">
                                            </a>
                                        </td>
                                        <td>{{ $member->first_name }}</td>
                                        <td>{{ $member->last_name }}</td>
                                        <td>{{ $member->country->name }}</td>
                                        <td>
                                            <a href="{{ RouteUrls::membersSocietyDetail($member->slug) }}" class="btn btn-gradient btn-sm border-radius-5 font__family-montserrat font__weight-light brk-white-font-color" data-brk-library="component__button">
                                                <span><i class="fa fa-user"></i> Info</span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection

@section('script')
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('custom/plugin/lity/lity.min.js') }}"></script>
    <script src="{{ asset('custom/js/app.js') }}"></script>
    <script>
        initDatatable();
    </script>
@endsection
