<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">

    <div class="container-block col">
        <div class="banner">
            <div class="slider">
                <div class="slider-box row">
                    <div class="slider-line" id="lin">
                        <img src="../../../public/assets/media/image/for-slider/1.webp" alt="">
                        <img src="../../../public/assets/media/image/for-slider/2.webp" alt="">
                        <img src="../../../public/assets/media/image/for-slider/3.webp" alt="">
                    </div>
                    <!-- <div class="slider-line-1" id="lin1">

                    </div> -->
                </div>
                <div class="slider-btn row">
                    <div class="btn-box">
                        <button class="left" id="left">
                            <svg  viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                <path d="M64,0a64,64,0,1,0,64,64A64.07,64.07,0,0,0,64,0Zm0,122a58,58,0,1,1,58-58A58.07,58.07,0,0,1,64,122Z" fill="#F72121"/>
                                <path d="M74.12,35.88a3,3,0,0,0-4.24,0l-26,26a3,3,0,0,0,0,4.24l26,26a3,3,0,0,0,4.24-4.24L50.24,64,74.12,40.12A3,3,0,0,0,74.12,35.88Z" fill="#f9f9f9"/>
                            </svg>
                        </button>
                        <button class="right" id="right">
                            <svg  viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                <title/>
                                <path d="M64,0a64,64,0,1,0,64,64A64.07,64.07,0,0,0,64,0Zm0,122a58,58,0,1,1,58-58A58.07,58.07,0,0,1,64,122Z" fill="#F72121"/>
                                <path d="M58.12,35.88a3,3,0,0,0-4.24,4.24L77.76,64,53.88,87.88a3,3,0,1,0,4.24,4.24l26-26a3,3,0,0,0,0-4.24Z" fill="#f9f9f9"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="catalog container-block col mt-100">
            <div class="container-block-1 row mb-50">
                <div class="title row">
                    <h2>Каталог</h2>
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <a href="<?php echo e(route('createProduct')); ?>" class="addItem">+ Добавить товар</a>
                    <?php endif; ?>
                </div>
                <div class="name row gap-15">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="?category=<?php echo e($category->id); ?>#catalog" class="pinkButton"><?php echo e($category->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="container-block row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="cards">
                    <div class="photo mb-15"><img src="<?php echo e($product->img); ?>" alt="productimg"></div>
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


                <div class="pagination-btn row">
                    <div class="btn-2">
                        <a href="#">Смотреть еще подарки →</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\giftStore\resources\views/pages/index.blade.php ENDPATH**/ ?>