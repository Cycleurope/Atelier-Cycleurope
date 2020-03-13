<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer <?php echo e($brand->name); ?></h1>
        </div>
    </div>
</div>
<form id="brand-form" action="<?php echo e(route('admin.brands.update', ['brand' => $brand])); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo e(method_field('PUT')); ?>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($brand->name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo e($brand->description); ?>">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <img src="<?php echo e($brand->getFirstMediaUrl('logos')); ?>" alt="" style="width: 100%">
                <a href="#" class="btn btn-sm width-sm btn-danger btn-rounded">Supprimer l'image</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <input type="submit" value="Enregistrer les modifications" class="btn btn-info btn-rounded width-lg">
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col">
        <a href="<?php echo e(route('admin.brands.index')); ?>" class="btn btn-rounded btn-secondary btn-sm">Retour</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/brands/edit.blade.php ENDPATH**/ ?>