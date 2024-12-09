@extends('partials.layout')

@section('title', 'Portfolio')

{{-- para html y css --}}
@section('content')
    <h1>@lang('portfolio') - {{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

@endsection