@extends('layouts.shared')

@section('shared')
<div class="main-page">
    @include('layouts._header')
    @yield('content')
    @include('layouts._footer')
</div>
@endsection
