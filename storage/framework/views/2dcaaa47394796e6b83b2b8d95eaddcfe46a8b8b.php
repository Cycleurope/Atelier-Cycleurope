<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-4">
            <h1>Mes inscriptions</h1>
        </div>
    </div>
    <div class="row">
        <?php if(count($records) == 0): ?>
        <div class="col-12 mb-3">
            <span class="font-weight-bold">Je ne suis inscris à aucune session de formation actuellement.</span>
        </div>
        <?php endif; ?>
        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="<?php echo e($record->masterclass->getFirstMediaUrl('desktop_covers')); ?>" alt="" width="100%">
                <div class="card-body">
                    <h3><?php echo e($record->masterclass->title); ?></h3>
                    <?php $__currentLoopData = $record->attendees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <h4><?php echo e($attendee->firstname); ?> <?php echo e($attendee->lastname); ?></h4>
                            Adresse e-mail : <?php echo e($attendee->email); ?>

                            <br />Téléphone : <?php echo e($attendee->phone); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($record->canBeCancelled()): ?>
                <div class="card-footer bg-purple">
                    <a href="<?php echo e(route('front.masterclasses.edit', $record->masterclass)); ?>" class="btn btn-sm btn-rounded btn-purple">Modifier mon inscription</a>
                </div>
                <?php else: ?>
                <div class="card-footer bg-pink text-white">
                    Inscription définitive
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="<?php echo e(route('front.masterclasses.index')); ?>" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/masterclasses/records.blade.php ENDPATH**/ ?>