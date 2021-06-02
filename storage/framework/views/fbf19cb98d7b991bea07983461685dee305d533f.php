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
        <h2>Create page, Customer</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?>​</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form enctype="multipart/form-data" action="<?php echo e(route('customers.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card_avatar">
                    <span>
                        <img class="customer_img" src="<?php echo e(asset('../images/upload_foto.png')); ?>" alt="">
                        <input name="profile_picture" type="file">
                    </span>
                </div>
                <div class="card_details card_form">
                    <input name="contact_name" type="text" class="name input_field" placeholder="Name person">
                    <div class="occupation">Full Name</div>

                    <div class="card_about">
                        <div class="item">
                            <input name="company_name" type="text" class="value input_field" placeholder="Bedrijfsnaam hier">
                            <span class="label">Company Name</span>
                        </div>
                        <div class="item">
                            <input name="email" type="email" class="value input_field" placeholder="email@mail.nl">
                            <span class="label">E-mail</span>
                        </div>
                        <div class="item">
                            <input name="phone" type="tel" class="value input_field" placeholder="+31 6 2345678">
                            <span class="label">Phone Number</span>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/customer/create.blade.php ENDPATH**/ ?>