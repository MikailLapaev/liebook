<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="profile container-block col">
            <div class="container-block row sp-btw">
                <div class="col mt-50">
                    <h3>Здравствуйте, <?php echo e(auth()->user()->name); ?>!</h3> <br>
                    <p> Почта: <?php echo e(auth()->user()->email); ?></p>
                    <form action="<?php echo e(route('logout')); ?>" method="post" class="profile-form">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="pinkButton transition mt-15">Выйти</button>
                    </form>
                </div>
                <div class="col">
                    <p>Заказы</p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\liebook\resources\views/pages/profile.blade.php ENDPATH**/ ?>