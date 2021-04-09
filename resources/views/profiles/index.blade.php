@extends('default')

@section('title')
    {{"All profiles"}}
@endsection

@section('topbar')
    @include('components.topbar--index')
@endsection

@section('content')
    <ul class="u-grid-12 u-grid-gap-2 u-grid-margin">
        @foreach($profiles as $profile)
            @include('profiles.components.profileCard--index')
        @endforeach
    </ul>
@endsection