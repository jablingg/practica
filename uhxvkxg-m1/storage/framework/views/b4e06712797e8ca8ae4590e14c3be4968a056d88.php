<?php $__env->startSection('content'); ?>

    <div class="slaiders">
        <h1>Улучшай свою игру c</h1>
        <div id="carouselExampleIndicators" class="carousel slide">

            <div class="carousel-inner">
                <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop -> first): ?>
                        <div class="carousel-item active">
                            <img  src="<?php echo e($b -> img); ?>" class="d-block w-100" alt="<?php echo e($b -> id); ?>" >
                            <p class="catalog-item-name"><?php echo e($b->name); ?></p>
                        </div>
                    <?php else: ?>
                        <div class="carousel-item">
                            <img  src="<?php echo e($b -> img); ?>"  class="d-block w-100"   alt="<?php echo e($b -> id); ?>">
                            <p class="catalog-item-name"><?php echo e($b->name); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vybtfafs/uhxvkxg-m1/resources/views/about.blade.php ENDPATH**/ ?>