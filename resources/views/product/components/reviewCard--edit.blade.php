<article class="itemCard a-popup u-grid-margin remove_vh">
    <h2 class="itemCard__header"> Reviews of {{$product->name}} </h2>
    <article class="section_divider"> </article>
    @foreach($reviews as $review) 
        @if($review->product_id == $product->id)
        <section class="itemCard__text mini_card"> 
            @foreach($profile as $profileID)
                @if($review->user_id == $profileID->id)
                    <h1 class="itemCard__text__description section_divider"> User: {{$profileID->name}} </h1>
                @endif
            @endforeach
            {{$review->review}} <br>
        </section>
        @endif
    @endforeach
    <section class="itemCard__btnSection">
        
        <!--<a class="itemCard__link__review" href="#"> 
            <button class="itemCard__btnSection__review"> 
                <p> Borrow </p> 
            </button> 
        </a>-->
        
        <a class="itemCard__link__review" href="#"> 
            <button class="itemCard__btnSection__review" name="borrowed" value="{{$profiles->id}}" type="submit"> Borrow product </button>
        </a>
        

        <a class="itemCard__link__back_to_home" href="/product/{{$product->id}}">
            <button class="itemCard__button__back_to_home">
                <p> Back </p>
            </button>
        </a>
    </section>
</article>


