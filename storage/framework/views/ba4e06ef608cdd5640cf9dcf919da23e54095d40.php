<?php $__env->startSection('title', 'Order Success'); ?>

<?php $__env->startSection('content'); ?>

<div class="alert alert-success">
    <h1>Thanks for order!</h1>
    <?php echo e(link_to_route('home', '<< Back to home'), false); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.'.config('template').'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/simple_shop/lashop/resources/views/frontend/default/shop/order_success.blade.php ENDPATH**/ ?>