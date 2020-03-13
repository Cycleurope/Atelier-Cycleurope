<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title"><?php echo e($product->brand->name); ?> <?php echo e($product->reference); ?> <?php echo e($product->name); ?> - <span class="text-info">Importer des composants</span></h1>
        </div>
    </div>
</div>
<form action="<?php echo e(route('admin.products.parts.import.post', $product)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Fichier d'import</label>
                        <input type="file" name="file" id="file">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Importer</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/products/import-parts-form.blade.php ENDPATH**/ ?>