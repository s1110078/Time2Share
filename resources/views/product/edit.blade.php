@extends('default')

@section('title')
    {{"Edit product"}}
@endsection

@section('topbar')
    @include('components.topbar--index')
@endsection

@section('content')

@section('content')
<form class="create-form__form" action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <section class="create-form__section black_font hide_element">
        @if($product->borrowed != null)
            @foreach($borrowedProfile as $borrowed)
                @if($borrowed->id == $product->borrowed)
                    <label for="borrowed"> Borrower: {{$borrowed->name}} </label>
                    <input class="create-form__input" type="text" name="borrowed" value="{{ $borrowed->id }}" class="form-control" placeholder="{{$borrowed->id}}">
                @endif
            @endforeach
        @else
            <label for="borrowed"> Borrower: {{$product->name}} </label>
            <input class="create-form__input" type="text" name="borrowed" value="{{ $product->id }}" class="form-control" placeholder="{{$product->id}}">
        @endif
    </section>
    @include('product.components.reviewCard--edit')
</form>
@endsection
