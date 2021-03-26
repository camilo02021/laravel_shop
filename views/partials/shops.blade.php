<section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Tiendas</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <h5> <strong>Destacadas</strong> </h5>
                                @forelse ($tiendas as $tienda)
                                    <a href="{{ route('front', ['tienda' => $tienda->id]) }}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ $tienda->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $tienda->description }}</h6>
                                            <span>{{ $tienda->name }}</span>
                                        </div>
                                    </a>
                                @empty
                                    <h6>No se encontraron tiendas...</h6>
                                @endforelse
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <h5> <strong>Todas</strong> </h5>
                                @forelse ($tiendas as $tienda)
                                    <a href="{{ route('front', ['tienda' => $tienda->id]) }}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ $tienda->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $tienda->description }}</h6>
                                            <span>{{ $tienda->name }}</span>
                                        </div>
                                    </a>
                                @empty
                                    <h6>No se encontraron tiendas...</h6>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>