<?php $__env->startSection('content'); ?>

    <div class="form-group">
        <h1 class="h1 text-justify"><img class="al img-thumbnail" src="<?php echo e($user->avatar_url); ?>" alt="Avatar"><?= $user->name ?></h1>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Projeto</th>
                <th scope="col">Link</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $repositories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repository): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($repository->name); ?></th>
                    <td><a href="<?php echo e($repository->html_url); ?>" class="badge badge-secondary"><?php echo e($repository->html_url); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EagleBankDigital\resources\views/page/show.blade.php ENDPATH**/ ?>