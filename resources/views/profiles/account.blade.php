@extends('default')

@section('title')
    {{$profiles->role . " " . $profiles->name}}
@endsection

@section('topbar')
    @include('components.topbar--index')
@endsection

@section('content')
    @include('profiles.components.profileCard--show')
@endsection