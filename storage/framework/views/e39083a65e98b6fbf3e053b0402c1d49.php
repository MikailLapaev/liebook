<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>

            <div class="banner">
                <img src="../../../public/assets/img/banner.jpg" alt="banner">
                <div class="container">
                    <div class="banner-text">
                        <h1>gift <br> <span>Store</span></h1>
                        <a href="#catalog" class="bbtn transition" id="bannerbtn">Заказать подарок 🎁</a>
                    </div>
                </div>


                </div>
            </div>
            <div class="catalog marginTopXL" id="catalog">
                <div class="container">
                    <p class="title">Каталог</p>
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <a href="<?php echo e(route('createProduct')); ?>" class="pinkColor">+ Добавить товар</a>
                    <?php endif; ?>
                    <div class="catalog-filters marginTopS">
                        <a href="/#catalog" class="yellowButton">Default</a>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="?category=<?php echo e($category->id); ?>#catalog" class="pinkButton"><?php echo e($category->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="catalog-items marginTopS">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product transition">
                                <a href="<?php echo e(route('productPage', $product->id)); ?>"><img src="<?php echo e($product->img); ?>" alt="productimg"></a>
                                <div class="product-title">
                                    <p><?php echo e($product->category->name); ?></p>
                                    <a href="<?php echo e(route('productPage', $product->id)); ?>">
                                        <h3><?php echo e($product->name); ?></h3>
                                    </a>
                                </div>
                                <div class="product-price">
                                    <h4><?php echo e($product->price); ?> ₽</h4>
                                    <a href="#" class="cartbtn transition">🛒</a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OSPanel\domains\giftStore\resources\views/pages/index.blade.php ENDPATH**/ ?>