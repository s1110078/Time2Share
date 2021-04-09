<li class="a-popup u-list-style-none gridCard" data-kind-of-drink={{$drink->kind}}>
    <article>
        <header class="gridCard__header u-flex-v-center">
            <h2 class="gridCard__heading"> {{$drink->kind}} {{$drink->name}} </h2>
        </header>
        <figure class="gridCard__figure">
            <img class="gridCard__image" src="{{$drink->image}}" alt="{{$drink->name . ' ' . $drink->kind}}" />
        </figure>
        <section class="gridCard__textSection u-flex-v-center">
            <p class="gridCard__text"> {{$drink->description}} </p>
        </section>
    </article>
</li>