<li class="a-popup u-list-style-none gridCard" data-category={{$product->category}}>
    <a href="/product/{{$product->id}}">
        <article>
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading"> {{$product->name}} </h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$product->image}}" alt="{{$product->name . ' ' . $product->category}}" />
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text"> {{$product->description}} </p>
            </section>
        </article>
    </a>
</li>