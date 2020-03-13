<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-9 py-3 offset-3">
            <h1>Vues Eclatées par marque<br /><span class="text-info"><?php echo e($brand->name); ?></span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4>Familles</h4>
                    <ul id="family-selector" class="list-group">
                        <?php $__currentLoopData = $families; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $family): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item" data-slug="<?php echo e($family->slug); ?>"><?php echo e($family->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Saisons</h4>
                    <ul id="season-selector" class="list-group">
                        <?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item" data-year="<?php echo e($season->year); ?>"><?php echo e($season->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-9">
                    <div class="row">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product col-12 col-md-6 col-lg-4 s-<?php echo e($product->season->year); ?> f-<?php echo e($product->family->slug); ?>">
                            <div class="card">
                                <div class="card-body">
                            <a href="<?php echo e(route('front.explodedviews.show', $product->id)); ?>">
                                <?php if($product->getFirstMedia('photos') != ''): ?>
                                <img src="<?php echo e($product->getFirstMediaUrl('photos')); ?>" alt="" width="100%">
                                <?php else: ?>
                                <img src="<?php echo e(asset('img/default_product.jpg')); ?>" alt="" width="100%">
                                <?php endif; ?>
                            </a>
                            <h5><?php echo e($product->reference); ?><br /><h3><?php echo e($product->name); ?></h3></h5>
                            <a class="fav-ev btn btn-xs <?php echo e($product->isFavorited() ? 'btn-danger' : 'btn-light'); ?>" data-ev="<?php echo e($product->id); ?>" href="#"><i class="mdi mdi-heart mdi-12px"></i></a>
                        </div>
                    </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/exploded-views/by-brand.blade.php ENDPATH**/ ?>