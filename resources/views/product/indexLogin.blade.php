@extends('default')

@section('title')
    {{"All products"}}
@endsection

@section('topbar')
    @include('components.topbarLogin--index')
@endsection

@section('homepage')
    <section class="homepage">
        <article class="homepage__title">
            <h2 class="homepage__title__heading"> Time 2 Share </h>
            <input class="homepage__searchbar" id="homepage__searchbar__id" type="text"/>
        </article>
    </section>
@endsection

@section('content')
    @include('product.components.checkbox--index')
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($product as $product)
            @include('product.components.productCard--index')
        @endforeach
    </ul>
@endsection

