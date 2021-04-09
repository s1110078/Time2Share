<article class="itemCard a-popup">
    <h2 class="itemCard__header"> {{$profiles->name}} </h2>
    <section class="itemCard__bio">
        <figure class="itemCard__figure">
            <img class="itemCard__image" src="{{$profiles->image}}" alt="{{$profiles->name}}" />
        </figure>
        <p class="itemCard__bio__description">
            {{$profiles->description}} 
        </p>
    </section>
    <section class="itemCard__btnSection">
        <a class="itemCard__link__product_list" href="/productList/{{$profiles->id}}"> <button class="itemCard__button__product_list"> <p> Available items </p> </button> </a>
        <a class="itemCard__link__borrowed_list" href="/borrowedList/{{$profiles->id}}"> <button class="itemCard__button__borrowed_list"> <p> Borrowed items </p> </button> </a>
        <a class="itemCard__link__back_to_home" href="/profiles"> <button class="itemCard__button__back_to_home"> <p> Back </p> </button> </a>
    </section>
</article>