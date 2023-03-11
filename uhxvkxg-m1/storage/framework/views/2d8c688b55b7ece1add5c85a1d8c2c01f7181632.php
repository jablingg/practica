<?php $__env->startSection('content'); ?>


        <div class="catalog">
            <p>Каталог</p>
            <div class="catalog_sort">
                <p>Сортировка:</p>
                <div class="sort_">
                    По году:
                    <a class="nav-links" href="<?php echo e(url('/catalog/sort/production_yaer/asc')); ?>">По возрастанию</a>
                    <a class="nav-links" href="<?php echo e(url('/catalog/sort/production_yaer/desc')); ?>">По убыванию</a>
                </div>
                <div class="sort_">
                    По наименованию:
                    <a class="nav-links" href="<?php echo e(url('/catalog/sort/name/asc')); ?>">По возрастанию</a>
                    <a class="nav-links" href="<?php echo e(url('/catalog/sort/name/desc')); ?>">По убыванию</a>
                </div>
                <div class="sort_">
                    По цене:
                    <a class="nav-links" href="<?php echo e(url('/catalog/sort/price/asc')); ?>">По возрастанию</a>
                    <a class="nav-links"  href="<?php echo e(url('/catalog/sort/price/desc')); ?>">По убыванию</a>
                </div>
            </div>
            <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="catalog-item">
                <a class="catalog-item-links" href="/public/catalog/<?php echo e($b->id); ?>"></a>
                <img src="<?php echo e($b->img); ?>">
                <p class="catalog-item-name"><?php echo e($b->name); ?></p>
                <p class="catalog-item-price"><?php echo e($b->price); ?>руб.</p>

                <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/<?php echo e($b -> id); ?>"> Заказать</a></button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vybtfafs/uhxvkxg-m1/resources/views/catalog.blade.php ENDPATH**/ ?>