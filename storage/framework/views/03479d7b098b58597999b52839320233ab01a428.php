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
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($user->id); ?></th>
                <td><a href="<?php echo e(route('users.show', $user->login)); ?>" class="badge badge-secondary"><?php echo e($user->login); ?></a></td>
                <td><a href="<?php echo e(route('users.show', $user->login)); ?>"><img src="<?php echo e($user->avatar_url); ?>" alt="Avatar"></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EagleBankDigital\resources\views/page/index.blade.php ENDPATH**/ ?>