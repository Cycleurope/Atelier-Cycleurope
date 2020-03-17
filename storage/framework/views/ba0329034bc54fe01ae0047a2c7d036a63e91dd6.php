<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title"><?php echo e($mc->title); ?></h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <?php if($mc->feedback == null): ?>
                <div class="alert alert-info">Aucun retour de formation</div>
                <a href="<?php echo e(route('admin.feedbacks.create', $mc)); ?>" class="btn btn-info btn-xs">Nouveau retour de formation</a>
                <?php else: ?>
                <a href="<?php echo e(route('admin.feedbacks.edit', $mc->feedback->id)); ?>" class="btn btn-sm btn-purple">Consulter le retour de formation</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/masterclasses/show.blade.php ENDPATH**/ ?>