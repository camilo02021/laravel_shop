<div class="row">
    <div class="col-lg-12">
        <div class="featured__controls">
            <ul>
                <li class="active" data-filter="*">Todos</li>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('shop', ['categoria' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\shop-app\resources\views/layouts/shop/partials/categories.blade.php ENDPATH**/ ?>