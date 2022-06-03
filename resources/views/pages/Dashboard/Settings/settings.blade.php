@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('lang.Settings') }}</title>
@endsection
@section('body')
    @livewire('dashboard.setttings.settings')
@endsection
