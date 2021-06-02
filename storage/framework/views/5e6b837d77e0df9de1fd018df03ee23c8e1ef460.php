<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="index_content flex_sb page_section">
        <div class="index_text">
            <h2>Laracel business card site</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad est eum ex excepturi expedita praesentium qui saepe sunt temporibus, ut.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto assumenda atque cupiditate delectus deserunt dignissimos dolore doloremque, esse est exercitationem, nihil nisi officiis, provident quod rem sint unde voluptatibus!
            </p>

            <p>Login to start creating business cards!</p>
        </div>
        
        <div class="index_image">
            <img class="index_img" src="<?php echo e(asset('../images/business_cards.png')); ?>" alt="">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/home.blade.php ENDPATH**/ ?>