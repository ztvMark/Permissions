@extends('laralum::layouts.master')
@section('icon', 'ion-plus-round')
@section('title', __('laralum_permissions::general.create_permission'))
@section('subtitle', __('laralum_permissions::general.create_permission_desc'))
@section('breadcrumb')
    <ul class="uk-breadcrumb">
        <li><a href="{{ route('laralum::index') }}">@lang('laralum_permissions::general.home')</a></li>
        <li><a href="{{ route('laralum::permissions.index') }}">@lang('laralum_permissions::general.permission_list')</a></li>
        <li><span>@lang('laralum_permissions::general.create_permission')</span></li>
    </ul>
@endsection
@section('content')
    @include('laralum_permissions::form', [
        'title' =>  __('laralum_permissions::general.create_permission'),
        'action' => route('laralum::permissions.store'),
        'button' => __('laralum_permissions::general.create'),
        'cancel' => route('laralum::permissions.index')
    ])
@endsection
