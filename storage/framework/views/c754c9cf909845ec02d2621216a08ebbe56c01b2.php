<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/22/2021
 * Time: 6:23 PM
 */
?>



<?php $__env->startSection('title'); ?>
    Detail
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="page_section">
        <h2>Detail page, Customer</h2>
        <div class="card">
            <div class="card_avatar">
                <img class="customer_img" src="<?php echo e(asset('storage/' . $customer->profile_picture)); ?>" alt="">
            </div>
            <div class="card_details">
                <div class="name"><?php echo e($customer->contact_name); ?></div>
                <div class="occupation">Position in company</div>

                <div class="card_about">
                    <div class="item">
                        <span class="value"><?php echo e($customer->company_name); ?></span>
                        <span class="label">Company Name</span>
                    </div>
                    <div class="item">
                        <span class="value"><?php echo e($customer->email); ?></span>
                        <span class="label">E-mail</span>
                    </div>
                    <div class="item">
                        <span class="value"><?php echo e($customer->phone); ?> </span>
                        <span class="label">Phone Number</span>
                    </div>
                </div>
                <div class="item buttons">
                    <a class="btn" id="card_btn-edit" href="<?php echo e(route('customers.edit', $customer->id)); ?>">Edit Business card</a>
                    
                    <form action="<?php echo e(route('customers.destroy', $customer->id)); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <input type="submit" value="Delete Business card" class="link btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
        <a href="<?php echo e(route('appointments.createFromCustomer', $customer)); ?>" class="btn btn-sucess">Make Appointment</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Place</th>
              </tr>
            </thead>
            <tbody>
              <?php $__empty_1 = true; $__currentLoopData = $customer->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <td><?php echo e($appointment->appointment_date); ?></td>
                    <td><a href="<?php echo e(route('appointments.show', $appointment)); ?>"><?php echo e($appointment->title); ?></a></td>
                    <td><?php echo e($appointment->location); ?></td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/customer/show.blade.php ENDPATH**/ ?>