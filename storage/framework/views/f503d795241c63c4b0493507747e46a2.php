<header class="header">
        <div class="container-main col">
        <div class="container col sp-btw align-items-center">
            <div class="logo">
                <a href="<?php echo e(route('index')); ?>" class="logo transition"><img src="../../../public/assets/media/logo/logo.svg" alt="logo"></a>
            </div>
            <div class="menu down">
                <nav>
                    <ul class="phone">
                        <li><a href="">+7 (927) 043-63-91</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Подобрать подарок</a></li>
                        <li><a href="#">Уникальный дизайн</a></li>
                        <li><a href="#">Для нее</a></li>
                        <li><a href="#">Для него</a></li>
                        <li><a href="#">Новинки</a></li>
                        <li><a href="#">Хиты</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="container row">
            <div class="btn">
                <a href="/#catalog">⁝ Каталог товаров</a>
            </div>
            <div class="block-2">
                <div class="search">
                    <form action="" method="post">
                        <input type="search" name="" id="" placeholder="Поиск по товарам">
                    </form>
                </div>
                <div class="menu">
                    <nav>
                        <ul>
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('login')); ?>">Вход</a>
                                <a href="<?php echo e(route('registerPage')); ?>">Регистрация</a>
                            <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('profile')); ?>">Профиль</a>
                                <?php endif; ?>
                            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                            <a href="<?php echo e(route('admin')); ?>">Админ-панель</a>
                            <?php endif; ?>
                            <li><a href="#">Избранное</a></li>
                            <li><a href="#">Сравнение</a></li>
                            <li><a href="#">Корзина</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\OSPanel\domains\giftory\resources\views/components/header.blade.php ENDPATH**/ ?>