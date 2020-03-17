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
            <div id="favorite-products-grid">
                <div class="grid-sizer col-lg-2">

                </div>
                <?php $__currentLoopData = $favorite_masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-lg-3 col-xl-2 grid-item">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="card-title"><span class="text-primary"><?php echo e($mc->title); ?></span></h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <a class="btn btn-light remfav-ev float-right " data-ev="<?php echo e($mc->id); ?>" ><i class="mdi mdi-close"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>



        <?php if(count($favorite_products) > 0): ?>
        <div id="favorite-products-grid">
            <div class="grid-sizer col-lg-2"></div>
            <?php $__currentLoopData = $favorite_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-lg-3 col-xl-2 grid-item">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="card-title">
                                        <span class="text-primary"><?php echo e($p->brand->name); ?></span><br /><?php echo e($p->name); ?>

                                        <a class="btn btn-light remfav-ev float-right " data-ev="<?php echo e($p->id); ?>" ><i class="mdi mdi-close"></i></a></h5>
                                </div>
                                <div class="col-lg-12">
                                    <img src="<?php echo e($p->getFirstMediaUrl('photos')); ?>" alt="" width="100%">
                                </div>
                            </div>
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
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/me/favorites.blade.php ENDPATH**/ ?>