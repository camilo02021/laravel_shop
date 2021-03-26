<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Categorias</span>
                        </div>
                
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('front', ['category' => $category->id, 'tienda' => $category->tienda_id]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="¿Que necesitas?">
                                <button type="submit" class="site-btn">Buscar</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>036 00000</h5>
                                <span>Soporte técnico</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="images/ca.jpg">
                        <div class="hero__text">
                            <h2>Domicilios en <br /> Caicedonia</h2>
    
                            <a href="#" class="primary-btn">¡Compra Ahora!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>