<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1><?php echo e($masterclass->title); ?></h1>
            <span class="sub-header"><?php echo e($masterclass->summary); ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo $masterclass->program; ?>

                </div>
            </div>
            <?php if( !$masterclass->hasAttendeesFromMine() ): ?>
            <form action="<?php echo e(route("front.masterclasses.register.post", $masterclass->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Je m'inscris à cette formation</h3>
                    <div class="row">
                        <div class="col-6">
                            <h5>Participant 1</h5>
                            <div class="form-group">
                                <label for="attendee1_lastaname">Nom</label>
                                <input type="text" class="form-control" id="attendee1_lastname" name="attendee1_lastname">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee1_firstname" name="attendee1_firstname">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee1_phone" name="attendee1_phone">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee1_email" name="attendee1_email">
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Participant 2</h5>
                            <div class="form-group">
                                <label for="attendee2_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee2_lastname" name="attendee2_lastname">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee2_firstname" name="attendee2_firstname">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee2_phone" name="attendee2_phone">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee2_email" name="attendee2_email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-success btn-rounded">Je valide mon inscription</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php else: ?>
            <div class="alert alert-primary-full">Je participe déjà à cette formation.</div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mes inscriptions à cette formation</h5>
                    <ul class="list-group mb-2">
                    <?php $__currentLoopData = $masterclass->attendeesFromMine(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><?php echo e($my_attendee->firstname); ?> <?php echo e($my_attendee->lastname); ?> - <?php echo e($my_attendee->email); ?> - <?php echo e($my_attendee->phone); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <form action="">
                        <button type="submit" class="btn btn-sm btn-danger btn-rounded width-sm float-right">Me désinscrire de la formation</button>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="<?php echo e(route('front.masterclasses.index')); ?>" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/masterclasses/show.blade.php ENDPATH**/ ?>