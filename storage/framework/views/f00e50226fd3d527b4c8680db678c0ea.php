<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="admin">
            <div class="col">
                <div class="container-block mt-100 sp-btw">
                    <div class="title-2">
                        <h3>Админ панель</h3>
                    </div>
                    <div class="title-2 row">
                        <h3>Категории</h3>
                        <a href="<?php echo e(route('createCategory')); ?>" class="addCategory">+ Добавить категорию</a>
                    </div>
                </div>

                <div class="category-container mt-50">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="category">
                            <h3><?php echo e($cat->name); ?></h3>
                            <form action="<?php echo e(route('destroyCategory', $cat->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="pinkButton">Удалить</button>
                            </form>

                        </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\giftStore\resources\views/pages/admin.blade.php ENDPATH**/ ?>