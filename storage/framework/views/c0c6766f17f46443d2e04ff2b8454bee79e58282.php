<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Profil</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Mes informations</h3>
                    <?php echo e(Auth::user()->address2); ?>

                    <br /><?php echo e(Auth::user()->postalcode); ?> <?php echo e(Auth::user()->city); ?>

                    <hr>
                    Tél : <?php echo e(Auth::user()->phone); ?>

                    <br>E-mail : <?php echo e(Auth::user()->email); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Changer mon mot de passe</h3>
                    <form action="">
                        <div class="form-group">
                            <label for="">Mot de passe actuel</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nouveau mot de passe</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Confirmation du nouveau mot de passe</label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success width-sm btn-rounded">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/me/index.blade.php ENDPATH**/ ?>