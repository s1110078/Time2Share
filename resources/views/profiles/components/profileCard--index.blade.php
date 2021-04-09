<li class="a-popup u-list-style-none gridCard" data-category={{$profile->name}}>
    <a href="/profiles/{{$profile->id}}">
        <article>
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading"> {{$profile->name}} </h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$profile->image}}" alt="{{$profile->name}}" />
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text"> {{$profile->description}} </p>
            </section>
        </article>
    </a>
</li>