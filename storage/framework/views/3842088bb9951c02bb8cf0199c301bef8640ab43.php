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
                                <?php if(auth()->guard()->guest()): ?>
                                    <a href="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i> <strong> Iniciar Sesión </strong></a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <strong> Salir </strong>
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                <?php endif; ?>
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
                            <li class="active"><a href="<?php echo e(route('landing-page')); ?>">Inicio</a></li>
                            <li><a href="<?php echo e(route('shop')); ?>">Tienda</a></li>
                            <li><a href="<?php echo e(route('checkout.index')); ?>">Terminar Compra</a></li>
                            <li><a href="<?php echo e(route('cart.index')); ?>">Cesta</a></li>
                            <?php if(auth()->guard()->check()): ?>
                                <li>
                                    <a href="<?php echo e(route('user.orders')); ?>">Mi cuenta</a>      
                                </li>
                            <?php endif; ?>
                            <li><a href="#">Más</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">Sobre la tienda</a></li>
                                    <li><a href="#">Soporte técnico</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <?php echo $__env->make('cart.layout.cart-count', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    

   
    <?php /**PATH C:\wamp64\www\shop-app\resources\views/layouts/shop/partials/shop-navbar.blade.php ENDPATH**/ ?>