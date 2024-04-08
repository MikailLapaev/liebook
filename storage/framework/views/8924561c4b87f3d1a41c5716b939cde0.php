<header class="header">
        <div class="container-main col">
        <div class="container col sp-btw align-items-center">
            <div class="logo">
                <a href="<?php echo e(route('index')); ?>" class="logo transition"><img src="../../../public/assets/media/logo/logo3.svg" alt="logo"></a>
            </div>
            <div class="menu down">
                <nav>
                    <ul class="phone">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 477.2 477.2" style="enable-background:new 0 0 477.2 477.2;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#141414;}
                                </style>
                                    <path class="st0" d="M475,380.3l-2.4-7.2c-5.6-16.7-24.1-34.2-41-38.8l-62.7-17.1c-17-4.6-41.2,1.6-53.7,14L292.6,354  c-82.5-22.3-147.1-86.9-169.4-169.4l22.7-22.7c12.4-12.4,18.7-36.7,14-53.7l-17.1-62.7c-4.6-17-22.1-35.4-38.8-41l-7.2-2.4  c-16.7-5.6-40.6,0.1-53,12.5L10,48.7C3.9,54.7,0,71.9,0,72c-1.2,107.8,41.1,211.6,117.3,287.8c76,76,179.5,118.2,286.9,117.3  c0.6,0,18.3-3.8,24.4-9.8l33.9-33.9C474.9,420.9,480.6,397,475,380.3z"/>
                                </svg>
                                +7 (927) 043-63-91
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#">Лучшее детей</a></li>
                        <li><a href="#">Лучшее для взрослых</a></li>
                        <li><a href="#">Лучшие цены</a></li>
                        <li><a href="#">Новинки</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="container row">
            <div class="btn">
                <a href="<?php echo e(route('catalogPage')); ?>">Каталог</a>
            </div>
            <div class="block-2">
                <div class="search">
                    <form action="" method="post">
                        <input type="search" name="" id="" placeholder="Найти книгу">
                    </form>
                </div>
                <div class="menu">
                    <nav>
                        <ul>
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('login')); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                                        <polyline points="10 17 15 12 10 7"/>
                                        <line x1="15" y1="12" x2="3" y2="12"/>
                                    </svg>
                                </a>
                                <a href="<?php echo e(route('registerPage')); ?>">
                                    <a href="<?php echo e(route('profile')); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 2C9.243 2 7 4.243 7 7C7 9.757 9.243 12 12 12C14.757 12 17 9.757 17 7C17 4.243
                                            14.757 2 12 2ZM12 10C10.346 10 9 8.654 9 7C9 5.346 10.346 4 12 4C13.654 4 15 5.346 15 7C15
                                            8.654 13.654 10 12 10ZM21 21V20C21 16.141 17.859 13 14 13H10C6.14 13 3 16.141 3 20V21H5V20C5
                                            17.243 7.243 15 10 15H14C16.757 15 19 17.243 19 20V21H21Z" fill="black"/>
                                        </svg>
                                    </a>
                                </a>
                            <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('profile')); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 2C9.243 2 7 4.243 7 7C7 9.757 9.243 12 12 12C14.757 12 17 9.757 17 7C17 4.243
                                            14.757 2 12 2ZM12 10C10.346 10 9 8.654 9 7C9 5.346 10.346 4 12 4C13.654 4 15 5.346 15 7C15
                                            8.654 13.654 10 12 10ZM21 21V20C21 16.141 17.859 13 14 13H10C6.14 13 3 16.141 3 20V21H5V20C5
                                            17.243 7.243 15 10 15H14C16.757 15 19 17.243 19 20V21H21Z" fill="black"/>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                            <a href="<?php echo e(route('admin')); ?>">Админ-панель</a>
                            <?php endif; ?>
                            <li><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink" height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 24 24" width="100%" xml:space="preserve"><g id="Icon"><path d="M12,5.593l0.563,-0.563c1.009,-1.009 2.378,-1.576 3.804,-1.576c1.427,0 2.796,0.567 3.805,1.576c0,0.001 0.001,0.002 0.002,0.003c1.009,1.008 1.576,2.377 1.576,3.804c-0,1.331 -0.227,3.257 -2.417,5.963c-2.063,2.548 -4.071,4.257 -7.015,5.633c-0.1,0.047 -0.206,0.07 -0.31,0.071l-0.016,0c-0.104,-0.001 -0.21,-0.024 -0.31,-0.071c-2.944,-1.376 -4.952,-3.085 -7.015,-5.633c-2.19,-2.706 -2.417,-4.632 -2.417,-5.963c-0,-1.427 0.567,-2.796 1.576,-3.804c0.001,-0.001 0.002,-0.002 0.002,-0.003c1.009,-1.009 2.378,-1.576 3.805,-1.576c1.426,0 2.795,0.567 3.804,1.576l0.563,0.563Zm0,13.33c2.552,-1.248 4.334,-2.802 6.167,-5.067c1.85,-2.285 2.083,-3.895 2.083,-5.019c0,-1.029 -0.409,-2.016 -1.136,-2.744c-0.001,-0.001 -0.002,-0.002 -0.003,-0.002c-0.728,-0.728 -1.715,-1.137 -2.744,-1.137c-1.029,0 -2.015,0.409 -2.743,1.137c-0.348,0.347 -0.714,0.713 -1.093,1.092c-0.146,0.147 -0.339,0.22 -0.531,0.22c-0.192,0 -0.385,-0.073 -0.531,-0.22c-0.379,-0.379 -0.745,-0.745 -1.093,-1.092c-0.728,-0.728 -1.714,-1.137 -2.743,-1.137c-1.029,0 -2.016,0.409 -2.744,1.137c-0.001,0 -0.002,0.001 -0.003,0.002c-0.727,0.728 -1.136,1.715 -1.136,2.744c0,1.124 0.233,2.734 2.083,5.019c1.833,2.265 3.615,3.819 6.167,5.067Z"/></g></svg>

                                </a></li>
                            <li><a href="#">Сравнение</a></li>
                            <li><a href="#">Корзина</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\OSPanel\domains\liebook\resources\views/components/header.blade.php ENDPATH**/ ?>