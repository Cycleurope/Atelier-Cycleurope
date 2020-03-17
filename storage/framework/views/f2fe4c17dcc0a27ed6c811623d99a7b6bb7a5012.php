<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Marques</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-8">
        <a href="<?php echo e(route('admin.brands.create')); ?>" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>

    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <?php if(count($brands) > 0): ?>
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Nom</th>
                                <th>Documents</th>
                                <th>Vidéos</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th>
                                    <?php if($b->hasLogo()): ?>
                                    <span class="badge badge-pill badge-success">&nbsp;</span>
                                    <?php else: ?>
                                    <span class="badge badge-pill badge-secondary">&nbsp;</span>
                                    <?php endif; ?>
                                </th>
                                <th><?php echo e($b->name); ?></th>
                                <td><?php echo $b->documentsBadge(); ?></td>
                                <td><?php echo $b->videosBadge(); ?></td>
                                <td class="text-right"><a href="<?php echo e(route('admin.brands.edit', $b)); ?>" class="btn btn-purple btn-xs">Consulter</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php else: ?>
                <div class="alert alert-info">No brand.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-rounded btn-secondary btn-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Tableau de bord</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/brands/index.blade.php ENDPATH**/ ?>