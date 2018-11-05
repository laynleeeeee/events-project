<?php $__env->startSection('content'); ?>

    <h1><strong><?php echo e($name); ?></h1></strong>

    <br><h3>People that have been on this event:</h3>
    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

     <div class="form-group">
                	 <button type="submit" class="btn btn-warning">
                                    <a href="/dashboard/del_event/<?php echo e($name); ?>">Cancel Participation</a>
                     </button>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>