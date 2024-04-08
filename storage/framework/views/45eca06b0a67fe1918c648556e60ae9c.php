<header class="container">
    <a href="<?php echo e(route('index')); ?>" class="logo transition"><img src="../../../public/assets/img/logo.png" alt="logo"></a>
    <nav>
        <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login')); ?>" class="yellowButton transition">Вход</a>
        <a href="<?php echo e(route('registerPage')); ?>" class="pinkButton transition">Регистрация</a>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('profile')); ?>" class="yellowButton transition">Профиль</a>
            <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
            <a href="<?php echo e(route('admin')); ?>" class="pinkButton transition">Админ-панель</a>
        <?php endif; ?>
    </nav>
</header>
<?php /**PATH F:\OSPanel\domains\giftStore\resources\views/components/header.blade.php ENDPATH**/ ?>