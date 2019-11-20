@extends('layouts.app')

@section('title', trans('app.title_profile'))

@include('_member',['update' => true, 'user' => $user,'title' => trans('app.profile')])
