<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>VCare</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link href="<?php echo e(asset('assets/img/VcarePNG.png')); ?>" rel="icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
       

        <main class="">
                 <?php if(session('success')): ?>
                   <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                   </div>
                 <?php elseif(session('error')): ?>
                   <div class="alert alert-danger" role="alert">
                        <?php echo e(session('error')); ?>

                   </div>
                 <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
<script  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.alert-success').fadeOut(2000);
        $('.alert-danger').fadeOut(2000);
    });
</script>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\customerportal\resources\views/layouts/app.blade.php ENDPATH**/ ?>