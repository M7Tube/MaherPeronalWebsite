@extends('layouts.singlepage')
@section('head')
    <title>{{ __('Items') }}</title>
@endsection
@section('body')
    @livewire('dashboard.items.items')
@endsection
