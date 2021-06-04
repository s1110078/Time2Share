<x-app-layout>
    <section class="admin_dashboard">
        <article class="admin_dashboard_title">
            <h2 class="admin_dashboard_title_header"> Overview of all products </h>
        </article>
    </section>    


    <ul class="dashboard_card_grid dashboard_card_gap dashboard_card_margin">
        @foreach($product as $product)
        <li class="u-list-style-none dashboard_card" data-name="{{$product->name}}" data-category="{{$product->category}}">
            <article>
                <header class="dashboard_card_header dashboard_card_center">
                    <h2 class="dashboard_card_heading"> {{$product->name}} 
                    <br> Owned by: 
                        @foreach($borrowedProfile as $profile)
                            @if($product->user_id == $profile->id)
                                {{$profile->name}}
                            @endif
                        @endforeach
                    </h2>
                </header>
                
                <section class="dashboard_card_textSection dashboard_card_center">
                    <a href="/dashboard/{{$product->id}}"> <button class="dashboard_card_textSection_button"> Delete </button> </a>
                </section>
            </article>
        </li>
        @endforeach
    </lu>




    <link rel="stylesheet" href="/css/utility.css">

</x-app-layout>

