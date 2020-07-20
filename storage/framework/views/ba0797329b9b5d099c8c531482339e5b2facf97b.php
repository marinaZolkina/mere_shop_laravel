<?php $__env->startSection('content'); ?>

    <h3>Our popular pizza!</h3>

    <div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('frontend.'.config('template').'.partials.short_products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.'.config('template').'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/simple_shop/lashop/resources/views/frontend/default/home.blade.php ENDPATH**/ ?>