<?php $__env->startSection('content'); ?>

    <h1>Profile</h1>
    <div name="profile">
        <strong>Picture</strong><br>
        <strong>Full Name:  </strong> <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?><br>
        <strong>Number of Badges:  </strong> <?php echo e(Auth::user()->n_badges); ?> 


    </div>

    <br><h3><strong><?php echo e(Auth::user()->first_name); ?></strong>, here are the events you have been on:</h3><br>

    <ul>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url('dashboard/events/'.$event->name_event)); ?>"><?php echo e($event->name_event); ?></a></li>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>