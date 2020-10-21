<?php $__env->startSection('content'); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Login</th>
            <th scope="col">Avatar</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($item->id); ?></th>
                <td><a href="<?php echo e(route('users.show', $item->login)); ?>" class="badge badge-secondary"><?php echo e($item->login); ?></a></td>
                <td><a href="<?php echo e(route('users.show', $item->login)); ?>"><img src="<?php echo e($item->avatar_url); ?>" alt="Avatar"></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EagleBankDigital\resources\views/page/index.blade.php ENDPATH**/ ?>