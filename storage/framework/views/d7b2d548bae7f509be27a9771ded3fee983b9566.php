<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-4">
            <h1>Documents favoris</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php if(count($favorite_documents) == 0): ?>
                    <div class="alert alert-primary-full">Aucun document dans vos favoris.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rlomvin/webapps/Atelier-Cycleurope/resources/views/front/documents/favorites.blade.php ENDPATH**/ ?>