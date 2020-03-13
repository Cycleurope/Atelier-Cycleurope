<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer la vidéo <span class="text-info"><?php echo e($video->title); ?></span></h1>
        </div>
    </div>
</div>
<form action="<?php echo e(route('admin.videos.update', $video)); ?>" method="POST"  method="POST" enctype="multipart/form-data">
    <?php echo e(method_field('PUT')); ?>

<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo e($video->title); ?>" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($b->id); ?>" <?php echo e($b->id == $video->brand->id ? 'selected': ''); ?>><?php echo e($b->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo e($video->description); ?>">
                </div>
                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" class="form-control" id="url" name="url" value="<?php echo e($video->url); ?>" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="thumbnail"></label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo e($video->getFirstMediaUrl('thumbnails')); ?>" alt="" width="100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <?php echo $video->embed(); ?>

                <h2><?php echo e($video->title); ?></h2>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                Postée le <?php echo e($video->created_at); ?> - Dernière mise à jour le <?php echo e($video->updated_at); ?>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save_and_edit" class="btn btn-purple width-lg btn-rounded mb-1">Enregistrer et vérifier le lien Youtube</button>
                <button type="submit" name="action" value="save" class="btn btn-primary width-lg btn-rounded mb-1">Enregistrer les modifications</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-lg-8">
        <form id="form-video-delete" action="<?php echo e(route('admin.videos.destroy', $video)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <a href="<?php echo e(route('admin.videos.index')); ?>" class="btn btn-secondary btn-sm btn-rounded btn-lg">Retour</a>
            <button type="submit" class="btn btn-sm btn-danger btn-rounded width-sm float-right">Supprimer</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/videos/edit.blade.php ENDPATH**/ ?>