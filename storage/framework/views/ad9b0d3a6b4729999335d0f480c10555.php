<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
            <form action="<?php echo e(route('auth')); ?>" method="post" class="mt-100 col align-items-center">
                <?php echo csrf_field(); ?>
                <h3>Вход в аккаунт</h3>
                <div class="form-items mt-15">
                    <div class="labels">
                        <input type="text" class="definput" id="email" name="email" placeholder="Email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <label for="email" class="err"><?php echo e($message); ?></label> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="labels">
                        <input type="password" class="definput" name="password" id="password" placeholder="Пароль">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>   <label for="password" class="err"><?php echo e($message); ?></label> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <?php $__errorArgs = ['auth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="err"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button type="submit" class="formButton transition">Войти</button>
                <div class="container-form mt-15">
                    <div class="div">
                        <p>Еще нет аккаунта?</p>
                    </div>
                    <div class="div">
                        <a href="<?php echo e(route('registerPage')); ?>">Создать</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\liebook\resources\views/pages/login.blade.php ENDPATH**/ ?>