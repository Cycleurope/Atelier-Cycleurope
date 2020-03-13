<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Mes Favoris</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php if((count($favorite_masterclasses) == 0) && (count($favorite_documents) == 0) && (count($favorite_videos) == 0)): ?>
            <div class="alert alert-primary-full">Vous n'avez aucun favoris.</div>
            <?php else: ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/me/favorites.blade.php ENDPATH**/ ?>