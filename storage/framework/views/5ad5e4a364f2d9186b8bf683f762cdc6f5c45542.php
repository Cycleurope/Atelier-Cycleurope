<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Retours de Formation :: <span class="text-info">Nouveau</span></h1>
            </div>
        </div>
    </div>
    <form id="form-feedback" action="<?php echo e(route('admin.feedbacks.store')); ?>" method='POST'>
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Formation rattachée</label>
                        <?php if($masterclass != null): ?>
                        <h3><?php echo e($masterclass->title); ?></h3>
                        <input type="hidden" name="masterclass" value="<?php echo e($masterclass->id); ?>">
                        <?php else: ?>
                        <select name="masterclass" id="masterclass" class="form-control">
                            <?php $__currentLoopData = $masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($mc->id); ?>"><?php echo e($mc->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <input type="hidden" name="content" id="input-feedback-content">
                        <div id="quill-feedback-content" style="min-height:200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Publication</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <input type="submit" value="Ajouter" class="btn btn-success btn-rounded width-sm">
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col">
        <a href="<?php echo e(route('admin.feedbacks.index')); ?>" class="btn btn-rounded btn-sm btn-secondary">Retour</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/feedbacks/create.blade.php ENDPATH**/ ?>