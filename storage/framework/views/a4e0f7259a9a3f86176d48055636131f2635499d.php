<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/22/2021
 * Time: 6:23 PM
 */
?>



<?php $__env->startSection('title'); ?>
    Create
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page_section">
        <h2>Appointment page, Customer</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?>​</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <?php echo csrf_field(); ?>
            <div class="card">
                
                <div class="card_details card_form">
                    <div class="name"><?php echo e($appointment->title); ?></div>
                    <div class="occupation">Title</div>



                    <div class="card_about">
                        <div class="item">
                            <a href="<?php echo e(route('customers.show', $appointment->customer)); ?>"><?php echo e($appointment->customer->contact_name); ?></a>
                            <span class="label">Customer</span>
                        </div>
                        <div class="item">
                            
                            <span class="value"><?php echo e($appointment->description); ?></span>
                            <span class="label">Description</span>
                        </div>
                        <div class="item">
                            <span class="value"><?php echo e($appointment->location); ?></span>
                            <span class="label">Place</span>
                        </div>
                        <div class="item">
                            <span class="value"><?php echo e($appointment->attendees); ?></span>
                            <span class="label">Involved</span>
                        </div>
                    </div>
                    <div class="item buttons_from">
                        <input type="submit" value="Confirm" class="btn card_btn-edit confirm_btn">
                        <a class="btn del_btn" href="<?php echo e(route('home')); ?>">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/appointment/show.blade.php ENDPATH**/ ?>