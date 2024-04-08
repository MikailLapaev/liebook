<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>


            <div class="productpage">
                <div class="container">
                    <div class="product-items">
                        <div class="p-img">
                            <img src="<?php echo e($product->img); ?>" alt="">
                        </div>
                        <div class="p-text">
                            <h3><?php echo e($product->name); ?></h3>
                            <p>Категория: <?php echo e($product->category->name); ?></p>
                            <p> <?php echo e($product->description); ?></p>
                            <div class="product-price">
                                <h4><?php echo e($product->price); ?> ₽</h4>
                                <div class="product-actions">
                                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                        <a href="<?php echo e(route('editProduct', $product->id)); ?>" class="yellowButton">✏️</a>
                                    <form action="<?php echo e(route('destroyProduct', $product->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="yellowButton">🚫</button>
                                    </form>

                                    <?php endif; ?>
                                    <div class="product-button">
                                        <a href="" class="bbtn">В корзину</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OSPanel\domains\giftStore\resources\views/pages/product.blade.php ENDPATH**/ ?>