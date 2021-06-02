<?php if(Session::get('status')): ?>
    <p class="alert alert-info">
        <?php echo e(Session::get('status')); ?>

    </p>
<?php endif; ?>
<?php if(Session::get('error')): ?>
    <p class="alert alert-danger">
        <?php echo e(Session::get('error')); ?>

    </p>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/partials/status.blade.php ENDPATH**/ ?>