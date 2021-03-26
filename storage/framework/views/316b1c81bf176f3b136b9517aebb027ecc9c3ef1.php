<section class="featured spad">
        <div class="container">

            <?php echo $__env->make('layouts.shop.partials.shop-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('layouts.shop.partials.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->make('layouts.shop.partials.products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
</section><?php /**PATH C:\wamp64\www\shop-app\resources\views/layouts/shop/partials/products-section.blade.php ENDPATH**/ ?>