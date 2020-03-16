<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Sessions de Formation</h1>
        </div>
    </div>
    <div class="row">
        <?php if(count($masterclasses) > 0): ?>
        <?php $__currentLoopData = $masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4">
            <div class="card">
                <a href="<?php echo e(route('front.masterclasses.show', $mc)); ?>">
                    <img src="<?php echo e($mc->getFirstMediaUrl('desktop_covers')); ?>" alt="" width="100%">
                </a>
                <div class="card-header bg-light collapsed">
                    <h2 class="card-title m-0">
                        <a href="<?php echo e(route('front.masterclasses.show', $mc)); ?>" class="text-dark">
                            <?php echo e($mc->title); ?>

                        </a>
                    </h2>
                    <h4>
                        <i class="mdi mdi-calendar-blank"></i> <?php echo e($mc->starts_at); ?> | <i class="mdi mdi-map-marker"></i> <?php echo e($mc->location); ?>

                    </h4>
                </div>
                <div class="card-body py-4 px-4">
                    <?php echo e($mc->summary); ?>

                </div>
                <div class="card-footer">
                    <?php if(!$mc->hasAttendeesFromMine()): ?>
                    Encore <?php echo e($mc->max_attendees - $mc->attendees()->count()); ?> places disponibles
                    <a href="<?php echo e(route('front.masterclasses.show', $mc->id)); ?>" class="btn btn-sm btn-rounded btn-purple width-sm float-right">S'inscrire</a>
                    <?php else: ?>
                    <span class="badge badge-pill badge-success"><i class="mdi mdi-check"></i> Je participe déjà à cette session de formation.</span>
                    <?php endif; ?>
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
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/masterclasses/index.blade.php ENDPATH**/ ?>