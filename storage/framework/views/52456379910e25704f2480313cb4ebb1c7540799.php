<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Formations</h1>
        </div>
    </div>
    <div class="row">
        <?php if(count($masterclasses) > 0): ?>
        <?php $__currentLoopData = $masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12">
            <div class="card">
                <div class="card mb-2">
                    <div class="card-header bg-light collapsed">
                        <h5 class="card-title m-0">
                            <a href="#" class="text-dark">
                                <?php echo e($mc->title); ?> | <i class="mdi mdi-calendar-blank"></i> <?php echo e($mc->starts_at); ?> | <i class="mdi mdi-map-marker"></i> <?php echo e($mc->location); ?>

                                <div class="badge float-right badge-info"><?php echo e($mc->attendees()->count()); ?>/<?php echo e($mc->max_attendees); ?></div>
                                <?php if($mc->hasAttendeesFromMine()): ?>
                                <span class="badge badge-primary-full float-right mr-1">Je participe déja à cette formation.</span>
                                <?php endif; ?>
                            </a>
                        </h5>
                    </div>
                    <div>
                        <div class="card-body">
                            <?php echo e($mc->summary); ?>

                            <hr>
                            <a href="<?php echo e(route('front.masterclasses.show', $mc->id)); ?>" class="btn btn-rounded btn-info width-sm">Plus d'informations</a>
                            <a href="#" class="btn btn-rounded btn-purple width-sm">S'inscrire</a>
                        </div>
                    </div>
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
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/masterclasses/index.blade.php ENDPATH**/ ?>