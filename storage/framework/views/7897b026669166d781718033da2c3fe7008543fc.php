<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Compradonia | Inicio</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet"  href="<?php echo e(asset('css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/elegant-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">

    <!-- Foundation -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/foundation.css')); ?>"/>
</head>

<body>

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Js Plugins -->
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('js/mixitup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/vendor/foundation.js')); ?>"></script>
    <script>
        $(document).foundation();
    </script>
</body>

</html><?php /**PATH C:\wamp64\www\shop-app\resources\views/layouts/shop/main.blade.php ENDPATH**/ ?>