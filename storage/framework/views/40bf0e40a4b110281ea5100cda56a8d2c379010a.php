<?php $__env->startSection('title', 'Cart'); ?>
<?php $__env->startSection('meta_desc', ''); ?>
<?php $__env->startSection('meta_key', ''); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <?php if( count($cart) > 0 ): ?>
            <div class="row">
                <div class="col-md-7 hide">
                    <?php echo Form::open(['route' => 'orders.store']); ?>

                    <?php echo $__env->make('frontend.'.config('template').'.shop.cart.form', ['submitButtonText' => 'Pay Order'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo Form::close(); ?>

                </div>
                <div class="col-md-7 newhide">
                    <h3 style="margin-top: 0">Cart</h3>
                    <?php echo e(session()->put('cart',$cart), false); ?>

                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('frontend.'.config('template').'.shop.cart.item', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h4 class="text-right">Total: <?php echo e($total*config('rate'), false); ?> $</h4>
                    <?php echo e(session()->put('total',$total*config('rate')), false); ?>

                    <button class="btn btn-primary btn-block buttonm">Send Order</button>
                </div>
                
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center">
                Your Cart is empty!
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.'.config('template').'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/simple_shop/lashop/resources/views/frontend/default/shop/cart/index.blade.php ENDPATH**/ ?>