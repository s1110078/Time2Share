<section class="topbar">
    <article class="homepage__topbar">
        <lu class="homepage__topbar__items">
            <a href="/product"> <li class="homepage__topbar__items__product"> Products </li> </a>
            <a href="/profiles"> <li class="homepage__topbar__items__profile"> Profiles </li> </a>
            <a href="/account/1"> <li class="homepage__topbar__items__signup"> {{ Auth::user()->name }} ({{ Auth::user()->role}}) </li> </a>
            <a href="/dashboard"> <li class="homepage__topbar__items__login"> Dashboard </li> </a>
        </lu>
    </article>
</section>