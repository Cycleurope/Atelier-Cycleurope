<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <img src="<?php echo e($masterclass->getFirstMediaUrl('desktop_covers')); ?>" alt="" width="100%">
        </div>
        <div class="col-6 px-4 py-4">
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
            <?php if($records->canBeCancelled()): ?>
            <form action="<?php echo e(route("front.masterclasses.update-register.post", $records->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Je modifie mon inscription à cette session de formation</h3>
                    <div class="row">
                        <div class="col-6">
                            <h5>Participant 1</h5>
                            <input type="hidden" name="attendee1_id" value="<?php echo e($records->attendees[0]->id); ?>">
                            <div class="form-group">
                                <label for="attendee1_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee1_lastname" name="attendee1_lastname" value="<?php echo e($records->attendees[0]->lastname); ?>">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee1_firstname" name="attendee1_firstname" value="<?php echo e($records->attendees[0]->firstname); ?>">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee1_phone" name="attendee1_phone" value="<?php echo e($records->attendees[0]->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee1_email" name="attendee1_email" value="<?php echo e($records->attendees[0]->email); ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Participant 2</h5>
                            <?php if($records->attendees->count() == 2): ?>
                            <input type="hidden" name="attendee2_id" value="<?php echo e($records->attendees[1]->id); ?>">
                            <div class="form-group">
                                <label for="attendee2_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee2_lastname" name="attendee2_lastname" value="<?php echo e($records->attendees[1]->lastname); ?>">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee2_firstname" name="attendee2_firstname" value="<?php echo e($records->attendees[1]->firstname); ?>">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee2_phone" name="attendee2_phone" value="<?php echo e($records->attendees[1]->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee2_email" name="attendee2_email" value="<?php echo e($records->attendees[1]->email); ?>">
                            </div>
                            <?php else: ?>
                            <div class="form-group">
                                <label for="attendee2_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee2_lastname" name="attendee2_lastname" value="">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee2_firstname" name="attendee2_firstname" value="">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee2_phone" name="attendee2_phone" value="">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee2_email" name="attendee2_email" value="">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-success btn-rounded">Je modifie mon inscription</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('front.masterclasses.deregister.post', $masterclass->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-danger btn-rounded float-right">Je ne souhaite plus participer à cette session de formation.</button>
                    </form>
                </div>
            </div>
            <?php else: ?>
            <div class="card bg-info text-light">
                <div class="card-body">
                    Votre inscription à cette session de formation est maintenant définitive. Si vous souhaitez malgré tout annuler, vous devez contacter le Service Formations au 03.25.39.39.39.
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
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/masterclasses/edit.blade.php ENDPATH**/ ?>