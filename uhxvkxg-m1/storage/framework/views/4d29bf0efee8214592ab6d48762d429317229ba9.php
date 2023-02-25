

<?php $__env->startSection('content'); ?>
    

        <div class="group">
            <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="chel">
                <img class="logs" src="<?php echo e($b->img); ?>">
                <h1><?php echo e($b->name); ?></h1>
                <h1><?php echo e($b->price); ?></h1>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vybtfafs/uhxvkxg-m1/resources/views/group.blade.php ENDPATH**/ ?>