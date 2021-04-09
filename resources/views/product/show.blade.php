@extends('default')

@section('title')
    {{$product->name}}
@endsection

@section('topbar')
    @include('components.topbar--index')
@endsection

@section('content')
    @include('product.components.productCard--show')
@endsection
