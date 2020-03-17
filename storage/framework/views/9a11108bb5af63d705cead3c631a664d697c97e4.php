<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1><?php echo e($feedback->masterclass->title); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $feedback->content; ?>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?php echo e(route('front.feedbacks.index')); ?>" class="btn btn-sm btn-rounded btn-info width-sm">Retour</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/feedbacks/show.blade.php ENDPATH**/ ?>