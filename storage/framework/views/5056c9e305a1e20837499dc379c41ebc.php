<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>



           <div class="admin marginTopXL">
                <div class="container">
                    <p class="title">Админ панель</p>
                    <div class="categories marginTopL">
                    <div class="cat-head">
                        <p class="title">Категории</p>
                        <a href="<?php echo e(route('createCategory')); ?>" class="yellowColor">+ Добавить категорию</a>
                    </div>
                        <div class="category-list marginTopXS">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="onecategory">
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




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OSPanel\domains\giftStore\resources\views/pages/admin.blade.php ENDPATH**/ ?>