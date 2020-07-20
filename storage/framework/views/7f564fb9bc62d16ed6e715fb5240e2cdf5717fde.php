<div class="col-xs-3 col-md-4 col-md-4 col-sm-6">
    <div class="card" style="background: #fff;">
        <a href="/<?php echo e($product->id, false); ?>-<?php echo e($product->slug, false); ?>" title="<?php echo e($product->title, false); ?>">
            <?php if( !empty($product->photo) ): ?>
                <?php echo e(Html::image('/uploads/products/medium/'.str_replace('images/', '', str_replace('.jpg', '', $product->photo)), $product->title, ['class'=>'img-responsive', 'style'=>'width:100%;']), false); ?>

            <?php else: ?>
                <?php echo e(Html::image('https://dummyimage.com/762x428/000/fff.jpg&text=No+image', $product->title, ['class'=>'img-responsive', 'style'=>'width:100%;']), false); ?>

            <?php endif; ?>
        </a>
        <div class="card-body">
            <b>
                <?php echo link_to_route('products.show', $product->title, [$product->id, $product->slug]); ?>

            </b>
            <p>Price: <b><?php echo e($product->cost*config('rate'), false); ?></b> $</p>
            <div class="text-right" >
                <input type="text" size=10 min=1 value=1 class="qwt">
                <button class="btn btn-primary btn-block incart" id=<?php echo e($product->id, false); ?>>In Cart</button>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/html/simple_shop/lashop/resources/views/frontend/default/partials/short_products.blade.php ENDPATH**/ ?>