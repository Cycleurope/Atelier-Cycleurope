<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Formations passées</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php if(count($masterclasses) > 0): ?>
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>Formation</th>
                                    <th class="text-right">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($mc->title); ?></th>
                                    <td class="text-right"><a href="<?php echo e(route('admin.masterclasses.show', $mc)); ?>" class="btn btn-purple btn-xs">Consulter</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                    <div class="alert alert-info-full">Aucune masterclass planifiée.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/masterclasses/archives.blade.php ENDPATH**/ ?>