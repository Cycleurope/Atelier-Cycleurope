<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Vidéos</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col"><a href="<?php echo e(route('admin.videos.create')); ?>" class="btn btn-info btn-rounded width-lg"><i class="mdi mdi-plus-circle-outline"></i> Nouvelle vidéo</a></div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <?php if(count($videos) > 0): ?>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Vidéo</th>
                            <th>Postée le</th>
                            <th>Mise à jour</th>
                            <th class="text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($v->title); ?></th>
                            <td><?php echo e($v->created_at); ?></td>
                            <td><?php echo e($v->updated_at); ?></td>
                            <td class="text-right"><a href="<?php echo e(route('admin.videos.edit', $v)); ?>" class="btn btn-purple btn-xs width-sm">Consulter</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php else: ?>
                <div class="alert alert-info-full">Il n'y a aucune vidéo.</div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>
<div class="row"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/videos/index.blade.php ENDPATH**/ ?>