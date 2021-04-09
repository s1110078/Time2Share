@extends('default')

@section('title')
    {{"All Drinks"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($drinks as $drink)
        @include('drinks.components.drinkCard--index')
    @endforeach
</ul>
@endsection