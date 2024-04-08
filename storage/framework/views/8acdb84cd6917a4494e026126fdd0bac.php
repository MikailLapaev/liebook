<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>


            <div class="container">
                <form action="<?php echo e(route('storeCategory')); ?>" method="post" class="marginTopXL">
                    <?php echo csrf_field(); ?>
                    <p class="title">Добавить категорию</p>
                    <div class="form-items">
                        <div class="labels">
                            <input type="text" class="definput" id="name" name="name" placeholder="Название">
                           <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <label for="name" class="err"> <?php echo e($message); ?></label> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <button type="submit" class="formButton transition">Добавить</button>
                </form>
            </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OSPanel\domains\giftStore\resources\views/pages/createCategory.blade.php ENDPATH**/ ?>