<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Saisons</h1>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-8">
        <a href="<?php echo e(route('admin.seasons.create')); ?>" class="btn btn-success btn-rounded width-lg"><i class="mdi mdi-plus-circle-outline"></i> Nouvelle saison</a>

    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <?php if(count($seasons) > 0): ?>
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Année</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($s->name); ?></th>
                                <td><?php echo $s->year; ?></td>
                                <td class="text-right"><a href="<?php echo e(route('admin.seasons.edit', $s)); ?>" class="btn btn-purple btn-xs">Consulter</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php else: ?>
                <div class="alert alert-info">No season.</div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/seasons/index.blade.php ENDPATH**/ ?>