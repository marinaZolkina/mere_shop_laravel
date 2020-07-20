Dear <?php echo e($name, false); ?>, thanks! <br/></br>

Your order: <br/>
<?php echo e($order, false); ?><br/>
Total: <?php echo e($total, false); ?><br/><br/>

Regard, ><?php echo $__env->yieldContent('title', config('app.name')); ?><?php /**PATH /var/www/html/simple_shop/lashop/resources/views/frontend/default/shop/emails/your_order.blade.php ENDPATH**/ ?>