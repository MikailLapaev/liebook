<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="container">
            <form action="<?php echo e(route('updateProduct', $product->id)); ?>" method="post" class="mt-100 col align-items-center" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <h3>Изменить товар</h3>
                <div class="form-items">
                    <div class="labels">
                        <input type="text" class="definput" id="name" name="name" placeholder="Название" value="<?php echo e($product->name); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <label for="name" class="err"><?php echo e($message); ?></label> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="labels">
                        <textarea name="description" id="description" class="definput" cols="30" rows="10" placeholder="Описание"><?php echo e($product->description); ?></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <label for="description" class="err"><?php echo e($message); ?></label> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="labels">
                        <input type="text" class="definput" id="price" name="price" value="<?php echo e($product->price); ?>" placeholder="Цена">
                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <label for="price" class="err"><?php echo e($message); ?></label> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <select class="definput" name="category_id" id="category">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php if($product->category_id == $category->id): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <div class="labels">
                        <p>текущее изображение:</p>
                        <img src="<?php echo e($product->img); ?>" alt="" class="editimg">
                        <input type="file" class="definput" name="img" id="img">
                        <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><label for="img"><?php echo e($message); ?></label><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                </div>
                <button type="submit" class="formButton transition">Изменить</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\giftStore\resources\views/pages/editProduct.blade.php ENDPATH**/ ?>