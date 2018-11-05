<?php $__env->startSection('content'); ?>

    <h3 style="text-align: center;">Please add an event</h3>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Event</div>
                    
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('add_event')); ?>">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name of Event</label>

                            <div class="col-md-6">
                                <select id="name_event" name="name_event" onchange="showfield(this.options[this.selectedIndex].value)">
                                    <option selected="selected">Select one....</option>
                                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($event->name_event); ?>"><?php echo e($event->name_event); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <option>Other....</option>
                                </select>
                                <div id="new_option"></div>

                                
                            </div>
                        </div>

                     <div class="form-group<?php echo e($errors->has('desc_event') ? ' has-error' : ''); ?>">
                        <label for="desc_event" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea id="text" type="text" class="form-control" name="desc_event"></textarea>

                                <?php if($errors->has('desc_event')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('desc_event')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('date_event') ? ' has-error' : ''); ?>">
                            <label for="date_event" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="date_event" type="date" class="form-control" name="date_event" required>

                                <?php if($errors->has('date_event')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('date_event')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

    <ul>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><strong><a href="<?php echo e(url('dashboard/events/'.$event->name_event)); ?>"><p>Event:</p><?php echo e($event->name_event); ?><p>Description:</p><?php echo e($event->desc_event); ?><p>Date:</p><?php echo e($event->date_event); ?></a></strong></li>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
            </div>
        </div>    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>