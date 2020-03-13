<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials/notifications-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Tableau de bord</h1>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formations</h5>
                    <a href="<?php echo e(route('admin.masterclasses.create')); ?>" class="btn btn-info mb-2 width-sm btn-rounded">Nouvelle formation</a>
                    <div class="alert alert-info">Aucune session de formation n'est disponible actuellement.</div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Espace Garantie</h5>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12"><h4 class="card-title">Prises en charge Service Après-Vente</h4></div>
                        <div class="col-6">
                            <div id="chart-requests-pending-inreview" style="height: 300px;">
                            </div>
                            <div class="text-center">
                                <ul class="list-inline chart-detail-list">
                                    <li class="list-inline-item">
                                        <h5 class="text-purple"><i class="fa fa-circle mr-1"></i>En attente</h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="text-info"><i class="fa fa-circle mr-1"></i>En cours de traitement</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="chart-requests-closed-refused" style="height: 300px;">
                            </div>
                            <div class="text-center">
                                <ul class="list-inline chart-detail-list">
                                    <li class="list-inline-item">
                                        <h5 class="text-success"><i class="fa fa-circle mr-1"></i>Cloturées</h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="text-danger"><i class="fa fa-circle mr-1"></i>Refusées</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">Progression des demandes des derniers mois</div>
                        <div class="col-12">
                            <div id="chart-last-requests" style="height: 300px"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/back/dashboard/admin.blade.php ENDPATH**/ ?>