<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Retours de formations</h1>
        </div>
    </div>
    <div class="row">
        <?php if(count($feedbacks) > 0): ?>
        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card">
                <a href="<?php echo e(route('front.feedbacks.show', $fb)); ?>">
                    <img src="<?php echo e($fb->masterclass->getFirstMediaUrl('desktop_covers')); ?>" alt="" width="100%">
                </a>
                <div class="card-header bg-light collapsed">
                    <h2 class="card-title m-0">
                        <?php echo e($fb->masterclass->title); ?>

                    </h2>
                </div>
                <div class="card-footer">
                    <a href="<?php echo e(route('front.feedbacks.show', $fb)); ?>" class="btn btn-sm btn-rounded width-sm btn-purple">Consulter</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <div class="alert alert-primary-full">Aucune formation n'est disponible actuellement.</div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/feedbacks/index.blade.php ENDPATH**/ ?>