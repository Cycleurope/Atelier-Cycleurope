<?php $__env->startSection('content'); ?>
<div id="app" class="py-5">
    <?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Importer des mots de passe M3</h1>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="form-m3pin-import" action="<?php echo e(route('admin.passwords.import')); ?>" method="POST" enctype="multipart/form-data" class="mb-4">
                            <?php echo csrf_field(); ?>
                            <div class="form-group"><label for="file">Fichier</label><input id="file" name="file" type="file" class="form-control flatcontrol" required></div>
                            <input type="submit" value="Importer" class="btn btn-success btn-block">
                        </form>
                        <div id="alert-m3pin-import" class="alert alert-primary-full text-center py-4 d-none">
                            <div class="spinner-border text-light mb-2"></div><br/>
                            <span class="font-weight-bold">Importation des PIN M3 en cours ... </span><br />Ne quittez pas cette page avant la fin de l'opération.</div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-sm btn-secondary width-sm btn-rounded">Retour</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/passwords/import-file.blade.php ENDPATH**/ ?>