<?php $__env->startSection('content'); ?>


        <div class="catalog">
            <div class="katkat">
                <button class="btn btn-sekondary dropdown-toggle" type="button" id="dropdownMenuButton1">
                    <a class="dropdown-item" href="<?php echo e(url('/catalog')); ?>">Категории</a>
                </button>
                <ul class="drop-down" aria-labelledby=dropdownmenubutton1>
                    <?php $__currentLoopData = $s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="dropdown-item" href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($c->id); ?>"><?php echo e($c->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="dropdown-menu mb-5" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuBatton1" data-bs-toggle="dropdownMenu">сортировка</button>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuBatton1">
                            <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/production_yaer/desc">по году</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/name/asc">по названию</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/price/desc">по цене</a></li>

                        </ul>
                    </div>
            </div>
            <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="catalog-item">
                <a class="catalog-item-links" href="/public/catalog/<?php echo e($b->id); ?>"></a>
                <img src="<?php echo e($b->img); ?>">
                <p class="catalog-item-name"><?php echo e($b->name); ?></p>
                <p class="catalog-item-price"><?php echo e($b->price); ?></p>

                <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/<?php echo e($b -> id); ?>"> Заказать</a></button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vybtfafs/uhxvkxg-m1/resources/views/catalog.blade.php ENDPATH**/ ?>