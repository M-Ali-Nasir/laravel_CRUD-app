<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel CRUD Assignment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('products.create')); ?>"> Create New Product</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" style="margin-right:5px" href="<?php echo e(route('logout')); ?>"> Log out</a>
            </div>
        </div>
    </div>

    <?php if($product = Session::get('success')): ?>
    <div class="alert alert-success" id="alertDiv" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo e($product); ?></strong> is Created as a product!
    </div>
    <?php endif; ?>

    <?php if($name = Session::get('updated')): ?>
    <div class="alert alert-primary" id="alertDiv" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        The Product is updated to <strong> <?php echo e($name); ?></strong>
    </div>
    <?php endif; ?>

    <?php if($product = Session::get('danger')): ?>
    
    <div class="alert alert-danger" id="alertDiv" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo e($product->name); ?></strong> has been deleted!
    </div>

    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->id); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->detail); ?></td>
            <td>
                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
                    
                    <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <?php echo e($products->links()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Assignment-app\resources\views/products/index.blade.php ENDPATH**/ ?>