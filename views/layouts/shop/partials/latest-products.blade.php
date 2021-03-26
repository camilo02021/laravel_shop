<section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Destacados</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @forelse ($featuredProducts as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset($product->image) }}" alt="">
                                            <br>
                                            <div class="latest-product__item__text">
                                            <h6>{{ $product->name }}</h6>
                                            <span>{{ $product->price }}</span>
                                        </div>
                                        </div>

                                   
                                    </a>
                                @empty
                                    <h6>No se encontraron productos...</h6>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Últimos Productos</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @forelse ($latestProducts as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ $product->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->name }}</h6>
                                            <span>{{ $product->price }}</span>
                                        </div>
                                    </a>
                                @empty
                                    <h6>No se encontraron productos...</h6>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>