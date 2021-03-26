
<div id="products">
    <div class="section-title">
        <h2>Productos Frescos</h2>
    </div>
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="small-3 medium-3 large-3 columns">

                <product :product="<?php echo e($product); ?>"
                    productlink="<?php echo e(route('product.show', ['product' => $product->id])); ?>"
                    productimagepath='<?php echo e(asset("$product->image")); ?>'
                ></product>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <h3>Lo sentimos, no hay productos subidos.</h3>
        <?php endif; ?>

    </div>
    <br>
    
</div><?php /**PATH C:\wamp64\www\shop-app\resources\views/layouts/shop/partials/products.blade.php ENDPATH**/ ?>