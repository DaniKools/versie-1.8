<?php $__env->startSection('title'); ?>
    About
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="page_section">
        <div class="about_info flex_sb">
            <div class="about_text">
                <h2>About</h2>
                <p>On here you can sort <bold>YOUR</bold> business cards.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorem exercitationem explicabo iste nam omnis placeat, praesentium soluta vitae voluptatibus?</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, tenetur.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut cum dolore esse exercitationem in, laboriosam maiores placeat quam quisquam rem similique vero vitae voluptatum.</p>
            </div>
            <div class="about_img">
                <img class="customer_img" src="<?php echo e(asset('../images/customer_social.png')); ?>" alt="">

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/about.blade.php ENDPATH**/ ?>