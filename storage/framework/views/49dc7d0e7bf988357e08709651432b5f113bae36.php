<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Annuaire</h1>
        </div>
    </div>
</div>
<form action="<?php echo e(route('admin.phonebook.update', $phonecard)); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo e(method_field('PUT')); ?>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo e($phonecard->title); ?>" required>
                </div>
                <div class="form-group">
                    <label for="logo">Logo de remplacement</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($phonecard->phone); ?>">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo e($phonecard->email); ?>">
                </div>
                <div class="form-group">
                    <label for="info">Information complémentaire</label>
                    <input type="text" class="form-control" id="info" name="info" value="<?php echo e($phonecard->info); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <img src="<?php echo e($phonecard->getFirstMediaUrl('logos')); ?>" alt="" width="100%">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-info btn-rounded width-sm">Mettre à jour</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-8">
        <form id="form-phonecard-delete" action="<?php echo e(route('admin.phonebook.destroy', $phonecard)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('DELETE')); ?>

        <a href="<?php echo e(route('admin.phonebook.index')); ?>" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>

        <button type="submit" class="btn btn-sm btn-rounded btn-danger width-md float-right">Supprimer</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/phonebook/edit.blade.php ENDPATH**/ ?>