<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title"><span class="text-info">Editer</span> le retour de formation associé à <span class="text-info"><?php echo e($feedback->masterclass->title); ?></span></h1>
            </div>
        </div>
    </div>
    <form id="form-feedback" action="<?php echo e(route('admin.feedbacks.update', $feedback)); ?>" method='POST'>
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PUT')); ?>

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Formation</label>
                        <select name="masterclass" id="masterclass" class="form-control">
                            <?php $__currentLoopData = $masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($mc->id); ?>" <?php echo e($feedback->masterclass_id == $mc->id ? 'selected': ''); ?>><?php echo e($mc->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <input type="hidden" name="content" id="input-feedback-content">
                        <div id="quill-feedback-content">
                            <?php echo html_entity_decode($feedback->content, ENT_QUOTES, 'UTF-8'); ?> 
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
                    <input type="submit" value="Update" class="btn btn-purple btn-block">
                </div>
            </div>
        </div>
    </div>
</form>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin.feedbacks.destroy', $feedback)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <input type="submit" value="Supprimer" class="btn btn btn-danger btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/feedbacks/edit.blade.php ENDPATH**/ ?>