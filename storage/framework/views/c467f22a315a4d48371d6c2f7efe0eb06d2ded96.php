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
        <form action="<?php echo e(route('appointments.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="customer_id" value="<?php echo e($customer_id); ?>">
            <div class="card">
                
                <div class="card_details card_form">
                    <input name="title" type="text" class="name input_field" placeholder="Title">
                    <div class="occupation">Title</div>

                    <div class="card_about">
                        <div class="item">
                            
                            <textarea name="description" class="form-control value input_field" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                            <span class="label">Description</span>
                        </div>
                        <div class="item">
                            <input name="location" type="text" class="value input_field" placeholder="Place">
                            <span class="label">Place</span>
                        </div>
                        <div class="item">
                            <input name="attendees" type="text" class="value input_field" placeholder="Involved">
                            <span class="label">Involved</span>
                        </div>
                        <div class="item">
                            <input name="appointment_date" class="value input_field" type="datetime-local"> 
                            <span class="label">Date</span>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/appointment/create.blade.php ENDPATH**/ ?>