<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Retours de formation</h1>
            </div>
        </div>
    </div>
    <?php if(App\Models\Masterclass::archive()->count() > 0): ?>
    <div class="row">
        <div class="col">
            Si il y a des formations passées ...
            <br /><a href="<?php echo e(route('admin.feedbacks.create')); ?>" class="btn btn-success mb-2 btn-rounded mb-4">Nouveau feedback</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php if(count($feedbacks) > 0): ?>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Formation</th>
                                <th>Crée le</th>
                                <th>Mise à jour</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($fb->masterclass->title); ?></th>
                                <td> <?php echo e($fb->created_at); ?></td>
                                <td> <?php echo e($fb->updated_at); ?></td>
                                <td class="text-right"><a href="<?php echo e(route('admin.feedbacks.edit', $fb)); ?>" class="btn btn-xs btn-purple">Consulter</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <div class="alert alert-warning-full">Aucun feedback. <a href="<?php echo e(route('admin.feedbacks.create')); ?>" class="text-success">Ajoutez votre premier feedback</a>.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="alert alert-warning-full">Aucun retour de formation ne peut être ajouté actuellement.</div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/feedbacks/index.blade.php ENDPATH**/ ?>