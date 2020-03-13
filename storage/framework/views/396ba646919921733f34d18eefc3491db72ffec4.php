<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-4">
            <h1>Documents</h1>
        </div>
    </div>

    <div class="row">
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo e(route('front.documents.brand', $brand)); ?>"><img src="<?php echo e($brand->getFirstMediaUrl('logos')); ?>" alt="" width="100%"></a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/documents/index.blade.php ENDPATH**/ ?>