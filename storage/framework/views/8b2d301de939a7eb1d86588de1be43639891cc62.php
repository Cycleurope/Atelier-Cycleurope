<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Mes Favoris</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if((count($favorite_masterclasses) == 0) && (count($favorite_products) == 0) && (count($favorite_documents) == 0) && (count($favorite_videos) == 0)): ?>

        <div class="col-12">
            <div class="alert alert-primary-full">Vous n'avez aucun favoris.</div>
        </div>
        <?php else: ?>
        <?php if(count($favorite_masterclasses)> 0): ?>
        <div class="col-12">
            aeagaegae
        </div>
        <?php endif; ?>
        <?php if(count($favorite_products) > 0): ?>
        <div class="col-12">

        <div id="favorite-products-grid">
                <div class="grid-sizer col-lg-2"></div>
                <?php $__currentLoopData = $favorite_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-2 grid-item">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($p->name); ?></h5>
                                <img src="<?php echo e($p->getFirstMediaUrl('photos')); ?>" alt="" width="100%">
                                <a class="btn btn-light remfav-ev" data-ev="<?php echo e($p->id); ?>" ><i class="mdi mdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if(count($favorite_documents)> 0): ?>
        <div class="col-12">
aaegeaae
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/me/favorites.blade.php ENDPATH**/ ?>