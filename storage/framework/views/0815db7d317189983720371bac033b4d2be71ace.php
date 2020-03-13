<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Annuaire</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col"><a href="<?php echo e(route('admin.phonebook.create')); ?>" class="btn btn-info btn-rounded width-sm px-2"><i class="mdi mdi-plus-circle-outline mr-1"></i>Ajouter</a></div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <?php if(count($phonecards) > 0): ?>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Info Comp.</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $phonecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($card->title); ?></th>
                            <td><?php echo e($card->phone); ?></td>
                            <td><?php echo e($card->email); ?></td>
                            <td><?php echo e($card->info); ?></td>
                            <td class="text-right"><a href="<?php echo e(route('admin.phonebook.edit', $card)); ?>" class="btn btn-xs btn-purple width-sm">Consulter</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php else: ?>
                <div class="alert alert-info">Aucune carte enregistrée.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>
<div class="row"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/phonebook/index.blade.php ENDPATH**/ ?>