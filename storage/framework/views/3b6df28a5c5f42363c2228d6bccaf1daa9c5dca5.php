<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>F.A.Q.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion custom-accordion" id="accordionExample">
                        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-2">
                            <div class="card-header bg-light collapsed" data-toggle="collapse" data-target="#collapse-<?php echo e($question->id); ?>" aria-expanded="false" aria-controls="collapse-<?php echo e($question->id); ?>">
                                <h5 class="card-title m-0">
                                    <a href="#" class="text-dark">
                                        <?php echo e($question->question); ?>

                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-<?php echo e($question->id); ?>" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $question->answer; ?>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vous avez une autre Question ?</h5>
                    <p>Contactez le Service Après-Vente au 03.25.39.39.39.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/faq/index.blade.php ENDPATH**/ ?>