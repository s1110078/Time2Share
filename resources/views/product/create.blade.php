@extends('default')

@section('title')
Creeer Product
@endsection

@section('topbar')
    @include('components.topbar--index')
@endsection

@section('content')

<article class="create-form a-popup">
    <form class="create-form__form" action="/product" method="POST">
        @csrf

        <section class="create-form__section">
            <label for="name"> Name </label>
            <input class="create-form__input" name="name" id="name" type="text"/>
        </section>

        <section class="create-form__section">
            <label for="category"> Category </label>
            <select class="create-form__input" name="category" id="category">
                @foreach($category_of_product as $category_of_product)
                    <option value="{{$category_of_product->category}}"> {{$category_of_product->category}} </option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="description"> Description </label>
            <textarea class="create-form__input create-form__input--big" name="description" id="description" type="text-area"> </textarea>
        </section>

        <section class="create-form__section">
            <label for="image"> Image </label>
            <select class="create-form__input" name="image" id="image">
                @foreach($images as $image)
                    <option value="{{$image->image}}"> {{$image->image}} </option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit"> Create product </button>
        </section>
    </form>
</article>
@endsection