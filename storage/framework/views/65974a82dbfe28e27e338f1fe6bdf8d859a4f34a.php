<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale'), false); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $__env->yieldContent('meta_desc', 'Shop based on Laravel'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_key', 'shop, laravel'); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">
    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <link href="<?php echo e(asset('css/app.css'), false); ?>" rel="stylesheet">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>

<?php echo $__env->make('frontend.default.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="container">
    <br/><br/><br/>
    <div id="pjax-container">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
</section>

<style>
.context-dark {
    color: rgba(255, 255, 255, 0.8);
}
</style>

<script src="<?php echo e(asset('js/app.js'), false); ?>"></script>
<script src="<?php echo e(asset('js/pjax.js'), false); ?>"></script>
<script src="<?php echo e(asset('js/core.js'), false); ?>"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script type="text/javascript">
    var count = '<?php echo e($cart_qty, false); ?>';
</script>
</body>
</html><?php /**PATH /var/www/html/simple_shop/lashop/resources/views/frontend/default/layouts/app.blade.php ENDPATH**/ ?>