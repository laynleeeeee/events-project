<?php $__env->startSection('content'); ?>

    <h1>Profile</h1>
    <div name="profile">
        <strong>Name:  </strong> <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?><br>
    </div>

    <br><h3><strong><?php echo e(Auth::user()->first_name); ?></strong>, here are the events you have been on:</h3><br>

    <ul>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><strong><a href="<?php echo e(url('dashboard/events/'.$event->name_event)); ?>"><p>Event:</p><?php echo e($event->name_event); ?><p>Description:</p><?php echo e($event->desc_event); ?><p>Date:</p><?php echo e($event->date_event); ?></a></strong></li>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>