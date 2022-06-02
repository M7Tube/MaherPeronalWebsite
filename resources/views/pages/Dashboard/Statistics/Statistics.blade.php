@extends('layouts.dashboard')
@section('head')
    <title>{{ __('lang.Statistics') }}</title>
@endsection
@section('body')
    @livewire('dashboard.statistics.statistics')
@endsection
