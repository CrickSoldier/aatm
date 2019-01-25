

<?php $__env->startSection('title', trans('messages.requirements.title')); ?>
<?php $__env->startSection('container'); ?>

<?php $__currentLoopData = $requirements['requirements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $requirement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3 align="center"><?php echo e(ucfirst($type)); ?></h3>
<ul class="list-group">
    <?php $__currentLoopData = $requirements['requirements'][$type]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extention => $enabled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item">
        <?php echo e($extention); ?>

        <div class="pull-right">
            <?php if($enabled): ?> 
                <i class="fa success fa-check-circle-o"></i>
            <?php else: ?> 
                <i class="fa error fa-times-circle-o"></i>
            <?php endif; ?>
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(!isset($requirements['errors'])): ?>
    <div class="btn-installer">
        <a class="btn btn-primary" href="<?php echo e(route('LaravelInstaller::permissions')); ?>">
            <?php echo e(trans('messages.next')); ?>

        </a>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('vendor.installer.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>