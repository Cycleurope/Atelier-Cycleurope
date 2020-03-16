<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Espace Garantie</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 py-3"><a href="<?php echo e(route('front.warranties.create')); ?>" class="btn btn-rounded btn-info width-sm">Nouvelle demande</a></div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/warranties/index.blade.php ENDPATH**/ ?>