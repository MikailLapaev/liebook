<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>


            <div class="productpage">
                <div class="container-block row mt-100">
                    <div class="container-block row flex-start gap-200">
                        <div class="p-img">
                            <img src="/<?php echo e($product->img); ?>" alt="item_img">
                        </div>
                        <div class="p-text">
                            <h2><?php echo e($product->name); ?></h2>
                            <p class="mt-30"><b>Категория:</b> <?php echo e($product->category->name); ?></p>
                            <p class="mt-15"><b>Описание:</b> <br> <?php echo e($product->description); ?></p>
                            <div class="product-price">
                                <h4 class="mt-15"><?php echo e($product->price); ?> ₽</h4>
                                <div class="product-actions mt-30">
                                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                        <a href="<?php echo e(route('editProduct', $product->id)); ?>" class="yellowButton">✏️</a>
                                    <form action="<?php echo e(route('destroyProduct', $product->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="yellowButton">🚫</button>
                                    </form>

                                    <?php endif; ?>
                                    <div class="product-button">
                                        <div class="btn-cart">
                                            <a href="">В корзину</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\liebook\resources\views/pages/product.blade.php ENDPATH**/ ?>