<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1><?php echo e($product->reference); ?> <?php echo e($product->name); ?> - Vue Eclatée</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <img src="<?php echo e($product->getFirstMediaUrl('photos')); ?>" alt="" width="100%">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo e($product->getFirstMediaUrl('datasheets')); ?>" class="btn btn-block btn-danger btn-rounded" download>Télécharger la fiche technique</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-bm width-sm btn-rounded btn-dark btn-block">Télécharger la B.O.M.</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="card">
                <div class="card-body">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Désignation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $product->bomitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bomitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($bomitem->part->mmitno); ?></th>
                    <td><?php echo e($bomitem->part->mmitds); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="<?php echo e(route('front.explodedviews.brand', $product->brand)); ?>" class="btn btn-rounded btn-info">Retour</a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/exploded-views/show.blade.php ENDPATH**/ ?>