<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Formations</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <a href="<?php echo e(route('admin.masterclasses.create')); ?>" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php if(count($masterclasses) > 0): ?>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Formation</th>
                            <th>Date</th>
                            <th>Lieu</th>
                            <th class="text-right">Tarif</th>
                            <th class="text-right">Participants</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="border-top: 2px solid #aaaaaa;">
                            <th><?php echo e($mc->title); ?></th>
                            <td><i class="mdi mdi-calendar-blank"></i> <?php echo e($mc->starts_at); ?> / <?php echo e($mc->ends_at); ?></td>
                            <td><i class="mdi mdi-map-marker"></i> <?php echo e($mc->location); ?></td>
                            <td class="text-right"><i class="mdi mdi-cash-multiple"></i> <?php echo e($mc->price); ?>€</td>
                            <td class="text-right"><i class="mdi mdi-account-badge-outline"></i> <span class="font-weight-bold">0</span>/<?php echo e($mc->max_attendees); ?></td>
                        </tr>
                        <tr>
                            <td colspan="4"><?php echo e($mc->summary); ?></td>
                            <td class="text-right"><a href="<?php echo e(route('admin.masterclasses.edit', $mc)); ?>" class="btn btn-xs btn-rounded btn-purple width-sm">Consulter</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
            <div class="alert alert-info-full">Il n'y a aucune formation planifiée.</div>
            <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/masterclasses/index.blade.php ENDPATH**/ ?>