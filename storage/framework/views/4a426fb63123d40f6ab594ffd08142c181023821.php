<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Vidéos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>Vidéos récemment ajoutées</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="brand-item col-4 data-brand="<?php echo e($brand->id); ?>">
                            <div><img src="<?php echo e($brand->getFirstMediaUrl('logos')); ?>" alt="" width="100%"></div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>

                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <?php if(count($videos) > 0): ?>
                    <div class="row">
                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div id="video-<?php echo e($v->youtubeID()); ?>" class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-4 video-item" data-videoid="<?php echo e($v->youtubeID()); ?>">
                            <img src="<?php echo e($v->getFirstMediaUrl('thumbnails')); ?>" alt="" width="100%;">
                            <h4><?php echo e($v->title); ?></h4>
                            <a class="fav-video btn btn-xs <?php echo e($v->isFavorited() ? 'text-danger' : 'text-secondary'); ?>" data-video="<?php echo e($v->id); ?>" href="#"><i class="mdi mdi mdi-heart-outline mdi-18px px-1 py-1"></i></a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php else: ?>
                    <div class="alert alert-info-full">Aucune vidéo n'est disponible actuellement.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="video-overlay" class="d-none">
    <div class="fullwidth-container">
        <div class="video-container">
            <iframe width="853" height="480" src="" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="caption">
            <h2>Lorem ipsum dolor sit amet.</h2>
        </div>
    </div>
    <button id="close-btn"></button>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/videos/index.blade.php ENDPATH**/ ?>