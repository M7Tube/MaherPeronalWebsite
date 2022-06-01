@extends('layouts.dashboard')
@section('head')
    <title>{{ __('lang.Settings') }}</title>
@endsection
@section('body')
    @livewire('dashboard.setttings.settings')
@endsection
