<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title"><?php echo e($page_title ?? 'Tous les comptes'); ?></h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Consulter directement le profil d'un compte client : </h5>
                    <form class="form-inline" action="<?php echo e(route('admin.users.by-username')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-2">
                            <label for="" class="mr-4">Code Client : </label>
                          <input type="text" class="form-control form-control" id="username" name="username" value="">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 btn-info">Go !</button>
                      </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php echo e($users->links()); ?>

                    <?php if(count($users) > 0): ?>
                    <table class="table table-sm" id="dealers-table">
                        <thead>
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom</th>
                                <th>CP / Ville</th>
                                <th>Statut</th>
                                <th>Mot de passe</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($user->username); ?></th>
                                <th><?php echo e($user->name); ?></th>
                                <td><?php echo e($user->postalcode); ?> <?php echo e($user->city); ?></td>
                                <td><?php echo $user->activeBadge(); ?></td>
                                <td><?php echo $user->passwordState(); ?></td>
                                <td class="text-right"><a href="<?php echo e(route('admin.users.show', $user->username)); ?>" class="btn btn-xs btn-purple width-sm">Consulter</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <div class="alert alert-info-full">Aucun compte utilisateur.</div>
                    <?php endif; ?>
                    <?php echo e($users->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/back/users/index.blade.php ENDPATH**/ ?>