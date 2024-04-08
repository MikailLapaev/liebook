<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">

        <div class="catalog container-block col mt-100">
            <div class="container-block-1 row mb-50">
                <div class="title row">
                    <h2>Каталог</h2>
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <a href="<?php echo e(route('createProduct')); ?>" class="addItem">+ Добавить товар</a>
                    <?php endif; ?>
                </div>
                <div class="name row gap-15">
                    <a href="/" class="pinkButton">Все категории</a>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="?category=<?php echo e($category->id); ?>#catalog" class="pinkButton"><?php echo e($category->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="container-block row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cards">
                        <div class="photo mb-15"><img src="<?php echo e($product->img); ?>" alt="item_img"></div>
                        <div class="name mb-30 col">
                            <?php echo e($product->name); ?>

                            <p><span class="category"><?php echo e($product->category->name); ?></span></p>
                        </div>
                        <div class="price-and-btn">
                            <div class="price"><?php echo e($product->price); ?> <span>₽</span></div>
                            <div class="btn">
                                <a href="<?php echo e(route('productPage', $product->id)); ?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\liebook\resources\views/pages/catalog.blade.php ENDPATH**/ ?>