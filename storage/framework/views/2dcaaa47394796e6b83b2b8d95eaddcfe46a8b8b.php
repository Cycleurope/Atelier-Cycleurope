<?php $__env->startSection('content'); ?>
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
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <?php $__currentLoopData = $record->attendees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <h4><?php echo e($attendee->firstname); ?> <?php echo e($attendee->lastname); ?></h4>
                            Adresse e-mail : <?php echo e($attendee->email); ?>

                            <br />Téléphone : <?php echo e($attendee->phone); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
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