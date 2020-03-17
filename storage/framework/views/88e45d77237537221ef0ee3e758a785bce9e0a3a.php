<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Liens Web</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-8">
        <a href="<?php echo e(route('admin.weblinks.create')); ?>" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>

    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <?php if(count($weblinks) > 0): ?>
                <ul id="weblinks-sortable" class="list-group list-group-flush">
                    <?php $__currentLoopData = $weblinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li id="weblinks-<?php echo e($w->id); ?>" class="list-group-item">
                        <div class="row">
                            <div class="col-6"><span class="font-weight-bold"><?php echo e($w->name); ?></span> / <a href="<?php echo e($w->url); ?>"><?php echo e($w->url); ?></a></div>
                            <div class="col-6 text-right"><a href="<?php echo e(route('admin.weblinks.edit', $w)); ?>" class="btn btn-purple btn-xs">Consulter</a></div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php else: ?>
                <div class="alert alert-info-full">Il n'y a aucun lien web.</div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/weblinks/index.blade.php ENDPATH**/ ?>