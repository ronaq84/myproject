<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
<style>
  .about-container {
    background: linear-gradient(to bottom, rgba(212,175,55,0.25) 0%, rgba(28,28,28,1) 60%),
                linear-gradient(135deg, #0f0f0f 0%, #1c1c1c 100%);
    color: #fff;
    padding: 80px 8%;
  }

  .about-text h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #d4af37;
  }

  .about-text p {
    line-height: 1.8;
    color: #ddd;
    font-size: 1.05rem;
  }

  /* ✅ Make founder image smaller and responsive */
  .about-container img {
    width: 80%;
    max-width: 350px;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.4);
  }

  @media (max-width: 768px) {
    .about-container img {
      width: 70%;
      max-width: 280px;
      margin-bottom: 20px;
    }
  }

  /* ✅ Responsive Feedback Section */
  .feedback-section {
    position: relative;
    color: #fff;
    text-align: center;
    padding: 100px 8%;
    background: url("<?php echo e(asset('images/bg.jpg')); ?>") center center / cover no-repeat;
    background-attachment: fixed;
  }

  .feedback-section::after {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.45);
    z-index: 0;
  }

  .feedback-box {
    background: rgba(255,255,255,0.05);
    border: 1px solid #333;
    border-radius: 15px;
    padding: 25px;
    transition: 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    position: relative;
    z-index: 2;
  }

  .feedback-box:hover {
    transform: translateY(-6px);
    border-color: #d4af37;
  }

  .feedback-box p {
    color: #ccc;
    font-style: italic;
  }

  .feedback-box h4 {
    color: #ffdb58;
    font-weight: 600;
  }

  /* ✅ Make background image responsive on smaller screens */
  @media (max-width: 992px) {
    .feedback-section {
      background-attachment: scroll;
      background-position: center top;
      background-size: contain; /* prevents zoom-in */
      padding: 80px 6%;
    }
  }

  @media (max-width: 576px) {
    .feedback-section {
      background-size: cover;
      background-position: center;
      padding: 70px 5%;
    }
    .feedback-box {
      padding: 18px;
    }
  }
</style>

<!-- ✅ About Section with Bootstrap Grid -->
<section class="about-container">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 text-center">
        <img src="<?php echo e(asset('images/me.jpg')); ?>" alt="Founder" class="img-fluid rounded shadow">
      </div>
      <div class="col-lg-6 about-text">
        <h2>Our Story</h2>
        <p>
          Founded by <strong>Ronaq Bahadur Ali</strong> in 2020, 
          <strong>The R Studio</strong> was born from the belief that every photograph tells a story.
          From intimate weddings to grand celebrations, we focus on emotion, light, and timelessness.
        </p>
        <p>
          Our team of passionate photographers, editors, and visual artists bring creativity and warmth into every frame.
          We aim not just to take pictures, but to tell your story, frame by frame.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Feedback Section with Responsive Grid -->
<section class="feedback-section">
  <div class="container position-relative z-2">
    <h2 class="mb-5" style="font-family:'Playfair Display', serif; color:#fff;">What Our Clients Say</h2>
    <div class="row gy-4">
      <?php $__currentLoopData = [
        ['They captured our wedding beautifully, every emotion, every laugh, every tear. Couldn’t have asked for better memories.', 'Ayesha & Hassan'],
        ['The team was incredibly professional yet so warm. They made us feel comfortable throughout the entire shoot.', 'Daniyal Khan'],
        ['Their creativity brought our brand campaign to life. Each shot was cinematic perfection.', 'Mahnoor Textiles'],
        ['Every photo tells a story. Their editing and tone are on another level, pure magic.', 'Noman Ahmed'],
        ['We’ve partnered multiple times, and they always exceed expectations. A truly talented and humble team.', 'The Event Co.']
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-6 col-lg-4">
        <div class="feedback-box">
          <p>“<?php echo e($feedback[0]); ?>”</p>
          <h4>— <?php echo e($feedback[1]); ?></h4>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Project 1\scd-project\resources\views/about.blade.php ENDPATH**/ ?>