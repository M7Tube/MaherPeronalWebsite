@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('lang.Services') }}</title>
@endsection
@section('body')
    @livewire('dashboard.services.services')
@endsection
