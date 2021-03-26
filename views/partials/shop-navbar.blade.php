    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-phone"></i> 036 00000</li>
                                <li> <strong> ¡Domicilio gratis! </strong> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                @guest
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> <strong> Iniciar Sesión </strong></a>
                                @else
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <strong> Salir </strong>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('landing-page') }}">Inicio</a></li>
                            <li><a href="{{ route('front') }}">Tiendas</a></li>
                            <li><a href="{{ route('checkout.index') }}">Terminar Compra</a></li>
                            <li><a href="{{ route('cart.index') }}">Cesta</a></li>
                            @auth
                                <li>
                                    <a href="{{ route('user.orders') }}">Mi cuenta</a>      
                                </li>
                            @endauth
                            <li><a href="#">Más</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">Sobre la tienda</a></li>
                                    <li><a href="#">Soporte técnico</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                @include('cart.layout.cart-count')
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    

   
    