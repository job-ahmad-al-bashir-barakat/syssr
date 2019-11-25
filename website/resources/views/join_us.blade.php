@extends('layouts.app')

@section('title', trans('app.title_join_us'))

@include('_member',['update' => false, 'user' => $user,'title' => trans('app.join_us'), 'banner_url' => url('img/syssr/join-us-banner.jpg')])
