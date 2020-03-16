<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Vues Eclatées</h1>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo e(route('front.explodedviews.brand', $b)); ?>"><img src="<?php echo e($b->getFirstMediaUrl('logos')); ?>" alt="" width="100%"></a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="row">
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-lg-3">
        <a href="<?php echo e(route('front.explodedviews.show', $p)); ?>">
           <div class="card">
               <div class="card-body">
                <h3><?php echo e($p->name); ?></h3>
                <img src="<?php echo e($p->getFirstMediaUrl('photos')); ?>" alt="" width="100%">
                <a class="fav-ev btn btn-xs <?php echo e($p->isFavorited() ? 'btn-danger' : 'btn-light'); ?>" data-ev="<?php echo e($p->id); ?>" href="#"><i class="mdi mdi-heart mdi-12px"></i></a>
               </div>
           </div>
        </a>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/exploded-views/index.blade.php ENDPATH**/ ?>