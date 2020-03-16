<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer <?php echo e($product->brand->name); ?> <?php echo e($product->reference); ?> <?php echo e($product->name); ?></h1>
        </div>
    </div>
</div>
<form action="<?php echo e(route('admin.products.update', $product)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PUT')); ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Fiche d'identité Produit</h3>
                <div class="form-group">
                    <label for="reference">Référence</label>
                    <input type="text" class="form-control" id="reference" name="reference" value="<?php echo e($product->reference); ?>" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($b->id); ?>" <?php echo e($b->id == $product->brand->id ? 'selected': ''); ?>><?php echo e($b->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Désignation</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($product->name); ?>" required>
                </div>
                <hr>
                <div class="form-group">
                    <label for="family">Famille</label>
                    <select name="family" id="family" class="form-control">
                        <?php $__currentLoopData = $families; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($f->id); ?>" <?php echo e($f->id == $product->family->id ? 'selected': ''); ?>><?php echo e($f->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="season">Saison</label>
                    <select name="season" id="season" class="form-control">
                        <?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($s->id); ?>" <?php echo e($s->id == $product->season->id ? 'selected': ''); ?>><?php echo e($s->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Photo du produit</h3>
                <div class="form-group">
                    <img src="<?php echo e($product->getFirstMediaUrl('photos')); ?>" alt="" style="width: 100%">
                    <label for="photo">Visuel Produit</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
                <form action="">
                    <button type="submit" class="btn btn-sm float-right text-dark"><i class="mdi mdi-file-remove mdi-24px"></i></button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Fiche Technique</h3>
                <div class="form-group">
                    <a href="<?php echo e($product->getFirstMediaUrl('datasheets')); ?>" download class="btn btn-rounded btn-sm btn-danger width-sm"><i class="mdi mdi-file-pdf"></i> Télécharger la fiche technique</a>
                    <hr>
                    <label for="datasheet">Fiche Technique</label>
                    <input type="file" name="datasheet" id="datasheet" class="form-control">
                </div>
                <form action="" class="mb-4">
                    <button type="submit" class="btn btn-sm float-right text-dark"><i class="mdi mdi-file-remove mdi-24px"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save" class="btn btn-success btn-rounded width-lg">Mettre à jour</button>
                <button type="submit" name="action" value="save_and_stay" class="btn btn-purple btn-rounded width-lg">Mettre à jour et Rester sur la fiche</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Vue éclatée</h3>
                <div class="form-group">
                    <label for="">Visuel Vue Eclatée</label>
                    <input type="file" name="explodedview" id="explodedview" class="form-control">
                </div>
                <div class="">
                    <form action="">
                        <button type="submit" class="btn btn-sm btn-secondary float-right"><i class="mdi mdi-file-remove mdi-12px mr-1"></i>Supprimer le visuel</button>
                    </form>
                </div>
                <div>
                    <a href="<?php echo e(route('admin.products.parts.import.get', $product->id)); ?>" class="btn btn-sm btn-purple mb-2">Importer la B.0.M.</a>
                    <a href="<?php echo e(route('admin.products.bom.empty', $product)); ?>" class="btn btn-sm btn-danger mb-2 float-right mr-1">Vider la BOM</a>
                </div>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Référence<br/><small>(reference)</small></th>
                            <th>Désignation<br/><small>(designation)</small></th>
                            <th>Info<br /><small>(info)</small></th>
                            <th class="text-right">Quantité<br /><small>(quantity)</small></th>
                            <th class="text-right">Index<br /><small>(index)</small></th>
                            <th class="text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $product->bomitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($bom->part->mmitno); ?></th>
                            <td><?php echo e($bom->part->mmitds); ?></td>
                            <td><?php echo e($bom->info); ?></td>
                            <td width="10" class="text-right"><?php echo e($bom->quantity); ?></td>
                            <td width="10" class="text-right"><?php echo e($bom->index); ?></td>
                            <td width="30" class="text-right"><a href="" class="btn btn-xs btn-purple btn-rounded width-sm">Editer</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save" class="btn btn-success btn-rounded width-lg">Mettre à jour</button>
                <button type="submit" name="action" value="save_and_stay" class="btn btn-purple btn-rounded width-lg">Mettre à jour et Rester sur la fiche</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-12 float-right">
        <form action="<?php echo e(route('admin.products.destroy', $product)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('DELETE')); ?>

        <button type="submit" class="btn btn-danger float-right btn-rounded btn-sm">Supprimer ce produit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/products/edit.blade.php ENDPATH**/ ?>