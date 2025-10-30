
<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('content'); ?>
<style>
.checkout-section {
  padding: 80px 5%;
  background: #111;
  color: #fff;
}
.checkout-section h2 {
  color: #d4af37;
  font-family: 'Playfair Display', serif;
  font-size: 2.5rem;
  margin-bottom: 40px;
  text-align: center;
}
.checkout-form {
  background: rgba(255,255,255,0.05);
  padding: 30px;
  border-radius: 12px;
  border: 1px solid #333;
  box-shadow: 0 5px 20px rgba(0,0,0,0.4);
}
.checkout-form label {
  display: block;
  margin-bottom: 5px;
  color: #ffdb58;
  font-weight: 500;
}
.checkout-form input, 
.checkout-form select {
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border-radius: 6px;
  border: none;
  background: rgba(255,255,255,0.1);
  color: #fff;
}

/* ✅ Fix dropdown visibility */
.checkout-form select option {
  background: #fff; /* light dropdown background */
  color: #000;      /* black text inside dropdown */
}

.checkout-form button {
  background: #d4af37;
  color: #000;
  padding: 12px 30px;
  border-radius: 30px;
  font-weight: 600;
  cursor: pointer;
  border: none;
  width: 100%;
  transition: 0.3s;
}
.checkout-form button:hover {
  background: #ffdb58;
}
</style>

<section class="checkout-section">
  <div class="container">
    <h2>Checkout</h2>

    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <form action="<?php echo e(route('checkout.placeOrder')); ?>" method="POST" class="checkout-form">
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" required>
          </div>

          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" required>
          </div>

          <div class="mb-4">
            <label>Payment Method</label>
            <select name="payment_method" required>
              <option value="">Select</option>
              <option value="card">Credit/Debit Card</option>
              <option value="paypal">PayPal</option>
              <option value="cash">Cash on Delivery</option>
            </select>
          </div>

          <button type="submit">Place Order</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Project 1\scd-project\resources\views/checkout.blade.php ENDPATH**/ ?>