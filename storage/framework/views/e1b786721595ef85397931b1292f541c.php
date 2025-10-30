

<?php $__env->startSection('title', 'Cart'); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-5">
  <h1 class="text-center mb-4 text-warning">Your Shopping Cart</h1>

  <?php if(session('cart') && count(session('cart')) > 0): ?>
    <div class="table-responsive">
      <table class="table table-dark table-bordered align-middle">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($details['name']); ?></td>
            <td>$<?php echo e($details['price']); ?></td>
            <td><?php echo e($details['quantity']); ?></td>
            <td>$<?php echo e($details['price'] * $details['quantity']); ?></td>
            <td>
              <form action="<?php echo e(route('cart.remove', $id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger btn-sm">Remove</button>
              </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>

    <div class="text-end mt-3">
      <h4 class="text-warning">
        Total: $
        <?php echo e(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], session('cart')))); ?>

      </h4>
      <a href="<?php echo e(route('checkout')); ?>" class="btn btn-warning mt-2">Proceed to Checkout</a>
    </div>

  <?php else: ?>
    <div class="text-center py-5">
      <h3 class="text-muted">Your cart is empty 😢</h3>
      <a href="<?php echo e(url('/products')); ?>" class="btn btn-warning mt-3">Continue Shopping</a>
    </div>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Project 1\scd-project\resources\views/cart.blade.php ENDPATH**/ ?>