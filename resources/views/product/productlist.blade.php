@extends('default')

@section('title')
    Product list
@endsection

@section('topbar')
    @include('components.topbar--index')
@endsection

@section('content')
    <section class="productList">
        <article class="productList__title">
            <h2 class="productList__title__header"> Products of {{$profiles->name}} </h>
        </article>
    </section>

    <ul class="u-grid-12 u-grid-gap-2 u-grid-margin">
    @foreach($product as $product)
        @if($product->user_id == $profiles->id)
            @include('product.components.productCard--index')
        @endif
    @endforeach
    </ul>
@endsection