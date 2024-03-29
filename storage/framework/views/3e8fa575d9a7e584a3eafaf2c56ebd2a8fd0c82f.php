<?php $__env->startSection('title'); ?>
    Contact
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="page_section">
        <div class="contact_info flex_sb fl_row-rev">
            <div class="contact_text">
                <h2>Contact</h2>
                <div class="contact_form">
                    <form action="">
                        <p>Want help with your business card?</p>

                        <div class="form_group">
                            <input class="input_field contact_input" type="text" placeholder="Full Name">
                            <span class="label">You're Name</span>
                        </div>
                        <div class="form_group">
                            <input class="input_field contact_input" type="tel" placeholder="+31 6 12345678">
                            <span class="label">You're Phone Number</span>
                        </div>
                        <div class="form_group">
                            <input class="input_field contact_input" type="email" placeholder="example@mail.com">
                            <span class="label">You're Email Address</span>
                        </div>
                        <div class="form_group">
                            <input class="input_field contact_input" type="text" placeholder="subject">
                            <span class="label">Subject of Message</span>
                        </div>
                        <div class="form_group">
                            <textarea class="input_field contact_input" placeholder="type here..."></textarea>
                            <span class="label">Message</span>
                        </div>
                        <div class="form_group">
                            <button class="btn contact_btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact_img">
                <img class="customer_img" src="<?php echo e(asset('../images/customers_index.png')); ?>" alt="">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/contact.blade.php ENDPATH**/ ?>