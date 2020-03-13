<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Produits</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <?php if(count($products) > 0): ?>
                <h3 class="mb-3">Il y a <?php echo e(count($products)); ?> références dans la librairie.</h3>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Désignation</th>
                            <th>Marque</th>
                            <th>Famille</th>
                            <th>Saison</th>
                            <th>BOM</th>
                            <th class="text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                            <th width="80"><?php echo e($p->reference); ?> </th>
                            <td><span class="font-weight-bold text-dark"><?php echo e($p->name); ?></span></td>
                            <td><?php echo e($p->brand->name); ?></td>
                            <th><?php echo e($p->family->name); ?></th>
                            <th><?php echo e($p->season->name); ?></th>
                            <td><?php echo $p->hasBOM(); ?></td>
                            <td class="text-right"><a href="<?php echo e(route('admin.products.edit', $p)); ?>" class="btn btn-xs btn-purple">Consulter</a></td>
                        <tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php else: ?>
                <div class="alert aert-info">Aucun produit</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/products/index.blade.php ENDPATH**/ ?>