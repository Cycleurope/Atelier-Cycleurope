<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Profil</h1>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h1><?php echo e($dealer->username); ?><br /><?php echo e($dealer->name); ?></h1>
                    <?php echo $dealer->activeBadge(); ?>

                    <hr>
                    <h5 class="card-title">Informations</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Adresse : <?php echo e($dealer->address1); ?> - <?php echo e($dealer->address2); ?></li>
                        <li class="list-group-item">CP / Ville : <?php echo e($dealer->postalcode); ?> <?php echo e($dealer->city); ?></li>
                        <li class="list-group-item">Adresse e-mail : <?php echo e($dealer->email); ?></li>
                        <li class="list-group-item">Téléphone : <?php echo e($dealer->phone); ?></li>
                    </ul>
                </div>
            </div>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isDealer')): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Assortiments</h5>
                    <?php $__currentLoopData = $dealer->assortments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><span class="font-weight-bold"><?php echo e($a->ocascd); ?></span> jusqu'au <span class="font-weight-bold"><?php echo e($a->octdat); ?></span></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-4">
            <?php if(($dealer->active == 0) &&($dealer->password == null)): ?>
            <div class="card">
                <div class="card-body">
                    <h3>Activation du compte</h3>
                    <form action="<?php echo e(route('admin.users.activate', $dealer)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="col-12">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-danger"><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Mot de passe</label>
                                <input type="password" name="password" class="form-control flatcontrol" autocomplete="current-password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirmation du mot de passe</label>
                                <input type="password" name="confirm_password" class="form-control flatcontrol">
                            </div>
                            <input type="submit" class="btn btn-success col" value="Activer le compte">
                        </div>
                    </form>
                </div>
            </div>
            <?php endif; ?>
            <?php if($dealer->active == 1): ?>
            <div class="card">
                <div class="card-body">
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger width-sm btn-rounded dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Désactiver le compte
                        </button>
                        <div class="dropdown-menu">
                            <form action="<?php echo e(route('admin.users.desactivate', $dealer)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="submit" value="Confirmer la desactivation du compte." class="dropdown-item btn text-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Demandes Service Après-Vente</h4>
                    <div class="alert alert-info-full">Aucune demande S.A.V. en cours</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formations</h4>
                    <div class="alert alert-info-full">Aucune inscription à des sessions de formation.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-sm btn-secondary width-sm btn-rounded">Retour</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/users/show.blade.php ENDPATH**/ ?>