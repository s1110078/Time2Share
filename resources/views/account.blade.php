@extends('default')

@section('title')
    Your account {{ Auth::user()->name }}
@endsection

@section('topbar')
    @include('components.topbarLogin--index')
@endsection

@section('content')
    <section class="productList">
        <article class="productList__title">
            <h2 class="productList__title__header"> My products </h>
        </article>
    </section>

    <ul class="u-grid-12 u-grid-gap-2 u-grid-margin">
        <li class="a-popup u-list-style-none gridCard red_bg">
            <a href="/product/create">
                <article>
                    <header class="gridCard__header u-flex-v-center">
                        <h2 class="gridCard__heading"> Add product </h2>
                    </header>
                    <figure class="gridCard__figure">
                        <img class="gridCard__image" src="/img/background3.jpg" alt="placeholder image for adding a product" />
                    </figure>
                    <section class="gridCard__textSection u-flex-v-center">
                        <p class="gridCard__text"> Add a new product </p>
                    </section>
                </article>
            </a>
        </li>


    @foreach($product as $product)
        @if($product->user_id == $profiles->id)
            @include('product.components.productCard--index')
        @endif
    @endforeach
    </ul>
@endsection