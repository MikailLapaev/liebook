<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>
            <div class="profile marginTopXL">
                <div class="container">
                    <p class="title">Здравствуйте, <?php echo e(auth()->user()->name); ?>!</p>
                    <div class="profile-items marginTopXS">
                        <p>Почта: <?php echo e(auth()->user()->email); ?></p>

                        <form action="<?php echo e(route('logout')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="pinkButton transition">Выйти</button>
                        </form>

                    </div>


                    <div class="orders marginTopXL">
                        <p class="title">Заказы</p>
                    </div>

                </div>
            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OSPanel\domains\giftStore\resources\views/pages/profile.blade.php ENDPATH**/ ?>