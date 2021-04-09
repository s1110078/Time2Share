<article class="itemCard a-popup">
    <h2 class="itemCard__header"> {{$product->name}} </h2>
    <figure class="itemCard__figure">
        <img class="itemCard__image" src="{{$product->image}}" alt="{{$product->name}}" />
    </figure>
    <section class="itemCard__text">
        <p class="itemCard__text__description section_divider"> {{$product->description}} </p>
        <a class="itemCard__text__link" href="/profiles/{{$profiles->id}}"> Owner: {{$profiles->name}} </a>
        @if($product->borrowed != null)
            @foreach($borrowedProfile as $borrowed) <!-- Ugly hack to show name of the borrower -->
                @if($borrowed->id == $product->borrowed)
                    <a class="itemCard__text__link" href="/profiles/{{$product->borrowed}}"> {{$borrowed->name}} is borrowing this </a>
                @endif
            @endforeach
        @else
            <a class="itemCard__text__link"> No one is borrowing this </a>
        @endif
    </section>

    <section class="itemCard__btnSection">
        <a class="itemCard__link__borrow" href="{{ route('product.edit', $product->id) }}"> 
            <button class="itemCard__button__borrow"> 
                <p> Reviews </p> 
            </button> 
        </a>

        <a class="itemCard__link__back_to_home" href="/product">
            <button class="itemCard__button__back_to_home">
                <p> Back </p>
            </button>
        </a>
    </section>
</article>