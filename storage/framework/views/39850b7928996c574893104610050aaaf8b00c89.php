<?php if(Session::has('message')): ?>
    <div class="row">
        <div class="col py-2">
            <div class="alert alert-<?php echo e(Session::get('class')); ?>-full alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo Session::get('message'); ?>

            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/partials/notifications-panel.blade.php ENDPATH**/ ?>