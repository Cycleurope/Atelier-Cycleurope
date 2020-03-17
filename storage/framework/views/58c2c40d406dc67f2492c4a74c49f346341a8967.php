<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer <span class="text-info"><?php echo e($mc->title); ?></span></h1>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form id="form-masterclass" action="<?php echo e(route('admin.masterclasses.update', $mc)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo e($mc->title); ?>">
                    </div>
                    <div class="form-group">
                        <label for="summary">Description courte</label>
                        <input type="text" class="form-control" id="summary" name="summary" value="<?php echo e($mc->summary); ?>">
                    </div>
                    <div class="form-group">
                        <label for="input-masterclass-program">Programme</label>
                        <textarea name="program" id="input-masterclass-program" cols="30" rows="10" class="form-control d-none"></textarea>
                        <div id="quill-masterclass-program" style="min-height:200px"><?php echo html_entity_decode($mc->program, ENT_QUOTES, 'UTF-8'); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="price">Tarif</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo e($mc->price); ?>">
                    </div>
                    <div class="form-group">
                        <label for="starts_at" class="control-label">Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Du</span>
                            </div>
                            <input type="date" class="form-control" name="starts_at" value="<?php echo e($mc->starts_at); ?>">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Au</span>
                            </div>
                            <input type="date" class="form-control" name="ends_at" value="<?php echo e($mc->ends_at); ?>">
-                       </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Lieu</label>
                        <input type="text" class="form-control" name="location" id="location" value="<?php echo e($mc->location); ?>">
                    </div>
                    <div class="form-group">
                        <label for="max_attendees">Nombre de participants maximum</label>
                        <input type="text" class="form-control" name="max_attendees" id="max_attendees" value="<?php echo e($mc->max_attendees); ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="input-masterclass-info">Informations supplémentaires</label>
                        <textarea name="information" id="input-masterclass-info" cols="30" rows="10" class="form-control d-none"></textarea>
                        <div id="quill-masterclass-info" style="min-height:200px"><?php echo html_entity_decode($mc->information, ENT_QUOTES, 'UTF-8'); ?></div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Visuels</h4>
                <img src="<?php echo e($mc->getFirstMediaUrl('desktop_covers')); ?>" alt="">
                <div class="form-group">
                    <label for="">Visuel Desktop de remplacement</label>
                    <input type="file" class="form-control" id="desktop_cover" name="desktop_cover">
                </div>
                <img src="<?php echo e($mc->getFirstMediaUrl('mobile_covers')); ?>" alt="">
                <div class="form-group">
                    <label for="">Visuel Mobile de remplacement</label>
                    <input type="file" class="form-control" id="mobile_cover" name="mobile_cover">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Publication</h4>
                    <div class="form-group">
                        <label for="published_at">Date de publication</label>
                        <input type="date" class="form-control" 
                            name="published_at"
                            value="<?php echo e($mc->published_at); ?>">
                    </div>
                    <div class="form-group">
                        <label for="records_start_at">Début des inscriptions</label>
                        <input type="date" class="form-control" 
                            name="records_start_at"
                            value="<?php echo e($mc->records_start_at); ?>">
                    </div>
            </div>
        </div>
        <div class="card">
                <div class="card-body">
                    <input type="submit" value="Enregistrer les modifications" class="btn btn-info btn-rounded width-sm">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <h5>Inscriptions</h5>
                <div class="alert alert-info-full">Aucune inscription à cette session de formation.</div>
                <ul class="list-group list-group-flush mb-2">
                    <li class="list-group-item">70110019 - LES CYCLES TROYENS</li>
                    <li class="list-group-item">70110000 - MR LE TEST</li>
                </ul>
                <a href="" class="btn btn-xs btn-purple">Télécharger la liste des inscriptions</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <form id="form-masterclass-delete" action="<?php echo e(route('admin.masterclasses.destroy', $mc)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('DELETE')); ?>

        <a href="<?php echo e(route('admin.masterclasses.index')); ?>" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>

        <button type="submit" class="btn btn-sm btn-rounded btn-danger width-md float-right">Supprimer</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/masterclasses/edit.blade.php ENDPATH**/ ?>