<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/22/2021
 * Time: 6:23 PM
 */
?>



<?php $__env->startSection('title'); ?>
    Customers
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="flex_sb page_section">
        <div class="customers_page">
            <div class="customers_text">
                <h2>All Customers are to be seen here in a list.</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis eveniet hic quod rem reprehenderit ullam. A accusamus amet eveniet itaque nihil similique velit!
                </p>
            </div>

            <div class="customers_list">
                <ul>
                    
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="customer_link">
                            <a href="<?php echo e(route('customers.show', $customer)); ?>" class="link"><?php echo e($customer->contact_name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            

            <div>
                <a class="btn" href="<?php echo e(route('customers.create')); ?>">Create Customers business card</a>
            </div>
        </div>

        <img class="index_img" src="<?php echo e(asset('../images/team_list.png')); ?>" alt="">
    </div>
    <?php echo e($customers->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/customer/index.blade.php ENDPATH**/ ?>