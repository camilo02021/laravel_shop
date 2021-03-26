<section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Destacados</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php $__empty_1 = true; $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?php echo e(asset($product->image)); ?>" alt="">
                                            <br>
                                            <div class="latest-product__item__text">
                                            <h6><?php echo e($product->name); ?></h6>
                                            <span><?php echo e($product->price); ?></span>
                                        </div>
                                        </div>

                                   
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h6>No se encontraron productos...</h6>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Últimos Productos</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php $__empty_1 = true; $__currentLoopData = $latestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?php echo e($product->image); ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo e($product->name); ?></h6>
                                            <span><?php echo e($product->price); ?></span>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h6>No se encontraron productos...</h6>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><?php /**PATH C:\wamp64\www\shop-app\resources\views/layouts/shop/partials/latest-products.blade.php ENDPATH**/ ?>