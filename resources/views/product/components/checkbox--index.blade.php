<section class="filter-section">
    @foreach($category_of_product as $product)
        @php
            $categoryProduct = strtolower($product->category);
        @endphp
        <section class="filter-section__wrapper"> 
            <label class="filter-section__label" for="{{$categoryProduct}}"> {{$product->category}} </label>
            <input class="filter-section__input" id="{{$categoryProduct}}" name="{{$categoryProduct}}" type="checkbox" checked>
        </section>
    @endforeach
</section>