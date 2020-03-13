<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Tableau de bord</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12"><h3>Mes favoris</h3></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3>Formations</h3>
                    <?php echo e(Auth::user()->favorite(App\Models\Masterclass::class)); ?>

                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3>Vues Eclatées</h3>
                    <?php echo e(Auth::user()->favorite(App\Models\Product::class)); ?>

                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3>Vidéos</h3>
                    <?php $__currentLoopData = Auth::user()->favorite(App\Models\Video::class); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fav_video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($fav_video->title); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <a href="<?php echo e(route('favorites')); ?>" class="btn btn-info">Gérer mes favoris</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Nouvelles formations disponibles</h3>
                    <?php $__currentLoopData = $masterclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($mc->title); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <hr>
                    <a href="<?php echo e(route('front.masterclasses.index')); ?>" class="btn btn-sm btn-info">Toutes les formations</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Mes inscription aux formations</h3>
                    <?php $__currentLoopData = Auth::user()->records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <h6><a href="<?php echo e(route('front.masterclasses.show', $record->masterclass)); ?>"><?php echo e($record->masterclass->title); ?></a></h6>
                        <ul>
                            <?php $__currentLoopData = $record->attendees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($attendee->firstname); ?> <?php echo e($attendee->lastname); ?> - <?php echo e($attendee->email); ?> <?php echo e($attendee->phone); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Derniers documents techniques</h3>
                    <?php if(count($last_documents) > 0): ?>
                    <ul class="list-group">
                        <?php $__currentLoopData = $last_documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item"><?php echo e($doc->title); ?> <small class="float-right"><?php echo e($doc->type->name); ?> | <?php echo e($doc->brand->name); ?></small></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php else: ?>
                    <div class="alert alert-purple">Aucun document technique ajouté récemment.</div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Dernières vidéos ajoutées</h3>
                    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($v->title); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <hr>
                    <a href="<?php echo e(route('front.videos.index')); ?>" class="btn btn-sm btn-info">Toutes les vidéos</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.front", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/home.blade.php ENDPATH**/ ?>