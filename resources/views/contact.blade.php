@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<style>
.contact-section {
  padding: 100px 5%;
  color: #fff;
  text-align: center;
  background: 
    linear-gradient(to bottom, rgba(212,175,55,0.25) 0%, rgba(28,28,28,1) 60%),
    linear-gradient(135deg, #0f0f0f 0%, #1c1c1c 100%);
}

.contact-section h2 {
  font-size: 2.8rem;
  color: #d4af37;
  margin-bottom: 10px;
  font-family: 'Playfair Display', serif;
}

.contact-section p {
  color: #ccc;
  font-size: 1.1rem;
  margin-bottom: 50px;
}

.contact-form {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid #333;
  border-radius: 15px;
  padding: 40px 35px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.4);
  transition: 0.3s ease;
}
.contact-form:hover {
  border-color: #d4af37;
  background: rgba(255,255,255,0.08);
}

.contact-form label {
  display: block;
  text-align: left;
  font-weight: 600;
  color: #ffdb58;
  margin-bottom: 8px;
}
.contact-form input,
.contact-form textarea {
  width: 100%;
  background: rgba(255,255,255,0.1);
  border: none;
  border-radius: 8px;
  color: #fff;
  padding: 12px 15px;
  margin-bottom: 20px;
  font-size: 1rem;
  transition: 0.3s ease;
}
.contact-form input:focus,
.contact-form textarea:focus {
  outline: none;
  border: 1px solid #d4af37;
  background: rgba(255,255,255,0.15);
}
.contact-form button {
  background: #d4af37;
  border: none;
  color: #0f0f0f;
  padding: 12px 30px;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s ease;
  width: 100%;
}
.contact-form button:hover {
  background: #ffdb58;
  transform: translateY(-2px);
}

.contact-info h3 {
  color: #ffdb58;
  margin-bottom: 15px;
}
.contact-info p {
  color: #ccc;
  line-height: 1.7;
  margin-bottom: 15px;
}
.contact-info i {
  color: #d4af37;
  margin-right: 10px;
}
</style>

<section class="contact-section">
  <div class="container">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you! Whether it’s a booking, collaboration, or just a hello, reach out below.</p>

    <div class="row justify-content-center align-items-start gy-5">
      <!-- ✅ Contact Form -->
      <div class="col-12 col-md-6">
        <form class="contact-form" id="contactForm" method="POST" action="{{ route('contact.submit') }}">
          @csrf
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>

          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>

          <label for="message">Your Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>

          <button type="submit">Send Message</button>
        </form>
      </div>

      <!-- ✅ Contact Info -->
      <div class="col-12 col-md-5 text-md-start text-center contact-info">
        <h3>Get in Touch</h3>
        <p><i class="fas fa-map-marker-alt"></i> Karachi, Pakistan</p>
        <p><i class="fas fa-envelope"></i> rstudio@gmail.com</p>
        <p><i class="fas fa-phone"></i> +92 3363603436</p>
        <p><i class="fas fa-clock"></i> Mon – Sat: 10:00 AM – 8:00 PM</p>
      </div>
    </div>
  </div>
</section>
@endsection
