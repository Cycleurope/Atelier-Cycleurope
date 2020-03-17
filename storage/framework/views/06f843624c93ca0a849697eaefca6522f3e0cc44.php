<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouvelle vidéo</h1>
        </div>
    </div>
</div>
<form action="<?php echo e(route('admin.videos.store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control mb-2">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($b->id); ?>"><?php echo e($b->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <a href="<?php echo e(route('admin.brands.create')); ?>">Ajouter une nouvelle marque</a>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" class="form-control" id="url" name="url" required>
                </div>
                <div class="form-group">
                    <label for="thumbnail"></label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save_and_edit" class="btn btn-success width-lg btn-rounded">Ajouter et Rester</button>
                <button type="submit" name="action" value="save" class="btn btn-success width-lg btn-rounded">Ajouter et Retourer à la liste</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col">
        <a href="<?php echo e(route('admin.videos.index')); ?>" class="btn btn-secondary btn-sm btn-rounded btn-lg"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Retour</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/videos/create.blade.php ENDPATH**/ ?>