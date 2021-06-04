<li class="a-popup u-list-style-none gridCard" data-name="{{$product->name}}" data-category="{{$product->category}}">
    <a href="/product/{{$product->id}}">
        <article>
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading"> {{$product->name}} </h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" 
                    srcset="{{$product->image}} 480w,
                            {{$product->image}} 800w"
                    sizes="(max-width: 600px) 480px, 800px"
                    src="{{$product->image}}"
                    alt="{{$product->name . ' ' . $product->category}}" />
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text"> {{$product->description}} </p>
            </section>
        </article>
    </a>
</li>