


<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session()->has('success_message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success_message')); ?>

            </div>
        <?php endif; ?>

        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

     <!-- Page Preloder Begin -->
     <?php echo $__env->make('layouts.shop.partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!-- Page Preloder End -->
     
    <!-- Navbar Section Begin -->
    <?php echo $__env->make('layouts.shop.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Navbar Section End -->

    <!-- Hero Section Begin -->
    <?php echo $__env->make('layouts.shop.partials.shop-hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <?php echo $__env->make('layouts.shop.partials.banner-products-categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <?php echo $__env->make('layouts.shop.partials.products-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <?php echo $__env->make('layouts.shop.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <?php echo $__env->make('layouts.shop.partials.latest-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Latest Product Section End -->


    <!-- Footer Section Begin -->
    <?php echo $__env->make('layouts.shop.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer Section End -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\shop-app\resources\views/front/shop.blade.php ENDPATH**/ ?>