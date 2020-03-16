<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer <?php echo e($family->name); ?></h1>
        </div>
    </div>
</div>
<form id="brand-form" action="<?php echo e(route('admin.families.update', ['family' => $family])); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo e(method_field('PUT')); ?>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($family->name); ?>" required>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
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
        <a href="<?php echo e(route('admin.families.index')); ?>" class="btn btn-rounded btn-secondary btn-sm">Retour</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/families/edit.blade.php ENDPATH**/ ?>