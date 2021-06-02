<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/22/2021
 * Time: 6:23 PM
 */
?>



<?php $__env->startSection('title'); ?>
    Edit
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="page_section">
        <h2>Edit page, Customer</h2>
        <form action="<?php echo e(route('customers.update', $customer->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="card">
                <div class="card_avatar">
                    <span>
                        <img class="customer_img" src="<?php echo e(asset('../images/upload_foto.png')); ?>" alt="">
                        <input type="file">
                    </span>
                </div>
                <div class="card_details card_form">
                    <input name="contact_name" type="text" class="name input_field" value="<?php echo e($customer->contact_name); ?>">
                    <div class="occupation">Position in company</div>

                    <div class="card_about">
                        <div class="item">
                            <input name="company_name" type="text" class="value input_field" value="<?php echo e($customer->company_name); ?>">
                            <span class="label">Company Name</span>
                        </div>
                        <div class="item">
                            <input name="email" type="email" class="value input_field" value="<?php echo e($customer->email); ?>">
                            <span class="label">E-mail</span>
                        </div>
                        <div class="item">
                            <input name="phone" type="tel" class="value input_field" value="<?php echo e($customer->phone); ?>">
                            <span class="label">Phone Number</span>
                        </div>
                    </div>
                    <div class="item buttons_from">
                        <input type="submit" value="Confirm" class="btn card_btn-edit confirm_btn">
                    </form>
                        <form action="<?php echo e(route('customers.destroy', $customer->id)); ?>" method="POST">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <input type="submit" value="Delete" class="link btn del_btn">
                        </form>
                    </div>
                </div>
            </div>
        

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/customer/edit.blade.php ENDPATH**/ ?>