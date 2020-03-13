<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Annuaire</h1>
        </div>
    </div>
    <div class="row">
        <?php if(count($cards) > 0): ?>
            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-body" style="min-height:500px">
                        <div class="row">
                            <div class="col-12">
                                <img src="<?php echo e($card->getFirstMediaUrl('logos')); ?>" alt="" width="100%">
                            </div>
                            <div class="col-12">
                                <h3><?php echo e($card->title); ?></h3>
                                <?php echo e($card->phone); ?>

                                <br /><?php echo e($card->email); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/phonebook/index.blade.php ENDPATH**/ ?>