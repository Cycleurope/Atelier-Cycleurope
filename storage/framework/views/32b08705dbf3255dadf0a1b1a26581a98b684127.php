<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Espace Garantie - Nouvelle demande</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3>Produit</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">SN / SKU</label>
                        <input type="text" class="form-control col-4">
                    </div>
                    <div class="form-group">
                        <label for="">SN / SKU Composant</label>
                        <input type="text" class="form-control col-4">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>Demande</h3>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label for="">Motif</label>
                        <select name="" id="" class="form-control">
                            <?php $__currentLoopData = $reasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Description du problème</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Copie de la facture client ou Bon de Livraison</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Photo du vélo complet</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Photo du défaut</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Code chassis</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-info btn-rounded width-sm float-right">Enregistrer le brouillon</button>
                    <button type="submit" class="btn btn-success btn-rounded width-sm float-right mr-2">Valider et envoyer ma demande</button>
                </div>
            </div>


        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h3>Statut de la demande</h3>
                </div>
                <div class="card-body">
                    <div class="alert">Brouillon</div>
                    <div class="alert alert-info-full">Pending</div>
                    <div class="alert alert-purple-full">In Review</div>
                    <div class="alert alert-success-full">Closed</div>
                    <div class="alert alert-danger-full">Refused</div>
                    <div class="alert alert-secondary-full">Hors Garantie</div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vincentlombard/Webapps/atelier/resources/views/front/warranties/create.blade.php ENDPATH**/ ?>