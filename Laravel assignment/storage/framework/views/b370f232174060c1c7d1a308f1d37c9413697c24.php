<!-- resources/views/login.blade.php -->



<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
    <h2>Login</h2>
</div>
</div>
    <?php if(session('error')): ?>
        <p style="color: red; margin: 0 20px 20px 0"><?php echo e(session('error')); ?></p>
    <?php endif; ?>
    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder = "Enter Password" required>
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder = "Enter Password" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Assignment-app\resources\views/products/login.blade.php ENDPATH**/ ?>