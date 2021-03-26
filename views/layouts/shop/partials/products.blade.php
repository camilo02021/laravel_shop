
<div id="products">
    <div class="section-title">
        <h2>Productos Frescos</h2>
    </div>
    <div class="row">
        @forelse($products as $product)
            <div class="small-3 medium-3 large-3 columns">

                <product :product="{{$product}}"
                    productlink="{{ route('product.show', ['product' => $product->id]) }}"
                    productimagepath='{{asset("$product->image")}}'
                ></product>

            </div>
            @empty

            <h3>Lo sentimos, no hay productos subidos.</h3>
        @endforelse

    </div>
    <br>
    
</div>