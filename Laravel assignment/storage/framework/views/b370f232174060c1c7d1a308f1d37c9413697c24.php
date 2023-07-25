<!-- resources/views/login.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
       
    </div>
</div>
<h2>Login</h2>
    <?php if(session('error')): ?>
        <p style="color: red;"><?php echo e(session('error')); ?></p>
    <?php endif; ?>
    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Assignment-app\resources\views/products/login.blade.php ENDPATH**/ ?>