@extends('layouts.app')

@section('content')
<!--
  Full Home Blade — The R Studio
  - Navbar + Hero + About + Portfolio + Why Choose Us + Packages
  - Dark + gold theme, responsive, Book Now links to /contact
  - Put required images in public/images/ (hero-wedding.jpg, about-bg.jpg, portfolio-bg.jpg, whyus-bg.jpg, package-bg.jpg, weddings/photoshoots/party images)
-->
<style>
/* ===== NAVBAR ===== */
nav {
  background-color: rgba(0,0,0,0.9);
  padding: 15px 5%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid rgba(255,215,0,0.08);
  position: sticky;
  top: 0;
  z-index: 1000;
  backdrop-filter: blur(6px);
}
nav .logo {
  font-size: 1.8rem;
  font-weight: 700;
  color: #ffdb58;
  letter-spacing: 1px;
  text-transform: uppercase;
}
nav ul {
  list-style: none;
  display: flex;
  gap: 28px;
  margin: 0;
  padding: 0;
}
nav ul li a {
  color: #fff;
  font-weight: 500;
  text-decoration: none;
  font-size: 1rem;
  position: relative;
  transition: color .25s ease;
}
nav ul li a::after {
  content: "";
  position: absolute;
  bottom: -6px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #ffdb58;
  transition: width .25s ease;
}
nav ul li a:hover { color: #ffdb58; }
nav ul li a:hover::after { width: 100%; }

/* ========== GENERAL ========== */
body {
  background-color: #0a0a0a;
  color: #fff;
  font-family: 'Poppins', sans-serif;
  margin: 0;
}
section { padding: 80px 5%; }
h2.section-title {
  color: #d4af37;
  font-size: 2.8rem;
  text-align: center;
  margin-bottom: 50px;
  letter-spacing: 1px;
  font-weight: 600;
}
p { color: #ccc; line-height: 1.8; }

/* ========== HERO SECTION ========== */
.hero {
  position: relative;
  height: 90vh;
  background: url('{{ asset('images/hero-wedding.jpg') }}') center/cover no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.hero::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(rgba(212,175,55,0.18), rgba(0,0,0,0.45));
}
.hero-content { position: relative; z-index: 2; max-width: 1100px; padding: 0 20px; }
.hero-content h1 {
  font-family: 'Playfair Display', serif;
  font-size: 3.8rem;
  font-weight: 700;
  color: #fff;
  margin: 0 0 14px 0;
  letter-spacing: 2px;
  text-shadow: 0 3px 8px rgba(0,0,0,0.6);
}
.hero-content p {
  color: #ffdb58;
  font-family: Georgia, serif;
  font-size: 1.7rem;
  font-style: italic;
  margin: 0 0 22px 0;
  font-weight: 500;
  text-shadow: 0px 3px 6px rgba(0,0,0,0.7);
}
.hero-content a {
  background-color: #d4af37;
  color: #000;
  padding: 12px 35px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 500;
  transition: 0.3s;
}
.hero-content a:hover { background-color: #b9972a; transform: translateY(-3px); }

/* ========== ABOUT SECTION ========== */
.about {
  position: relative;
  background: url('{{ asset('images/about-bg.jpg') }}') center/cover fixed no-repeat;
  text-align: center;
}
.about::before {
  content: "";
  position: absolute; inset: 0;
  background: rgba(0,0,0,0.4);
}
.about .section-title, .about p { position: relative; z-index: 2; color: #ffdb58; }
.about p { max-width: 900px; margin: 0 auto; font-size: 1.1rem; }

/* ========== PORTFOLIO (WITH BACKGROUND) ========== */
.portfolio {
  position: relative;
  background: url('{{ asset('images/portfolio-bg.jpg') }}') center/cover fixed no-repeat;
  text-align: center;
  padding: 80px 0;
}

.portfolio::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.6);
}

.portfolio .section-title,
.portfolio-category {
  position: relative;
  z-index: 2;
}

.portfolio-category {
  margin-bottom: 70px;
}

.portfolio-category h3 {
  color: #ffd700;
  font-size: 2rem;
  text-align: center;
  margin-bottom: 25px;
}


.gallery {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  padding: 0 40px;
}


.gallery img {
  width: 100%;
  height: 280px; 
  object-fit: cover; 
  object-position: top center; 
  border-radius: 12px;
  transition: transform .4s ease, box-shadow .4s ease;
  box-shadow: 0 6px 16px rgba(0,0,0,0.3);
}

.gallery img:hover {
  transform: scale(1.04);
  box-shadow: 0 10px 25px rgba(255,215,0,0.25);
}


@media (max-width: 992px) {
  .gallery {
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
  }
  .gallery img {
    height: 260px;
  }
}

@media (max-width: 600px) {
  .gallery {
    grid-template-columns: 1fr;
    gap: 15px;
    padding: 0 20px;
  }
  .gallery img {
    height: 240px;
  }
}


/* ========== WHY CHOOSE US ========== */
.why-us {
  position: relative;
  background: url('{{ asset('images/whyus-bg.jpg') }}') center/cover fixed no-repeat;
  text-align: center;
}
.why-us::before {
  content: "";
  position: absolute; inset: 0;
  background: rgba(0,0,0,0.4);
}
.why-us .section-title, .why-us .features { position: relative; z-index: 2; }
.features {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
  max-width: 1000px;
  margin: 0 auto;
}
.feature-box {
  background-color: #d4af37;
  border-radius: 18px;
  padding: 30px 20px;
  width: 260px;
  color: #000;
  box-shadow: 0 0 20px rgba(212,175,55,0.28);
  transition: all .3s ease;
  border: 2px solid transparent;
  text-align: center;
}
.feature-box i { color: #000; font-size: 2.4rem; margin-bottom: 12px; display:block; }
.feature-box h4 {
  font-weight: 700;
  font-size: 1.05rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin: 6px 0 0 0;
}
.feature-box p { color: rgba(0,0,0,0.7); margin-top: 8px; font-size: .95rem; }
.feature-box:hover {
  background-color: #ffdb58;
  transform: translateY(-8px);
  box-shadow: 0 0 30px rgba(255,219,88,0.45);
}

/* ========== OUR PACKAGES ======== */
.packages {
  position: relative;
  background: url('{{ asset('images/package-bg.jpg') }}') center/cover fixed no-repeat;
  text-align: center;
  padding: 90px 5%;
}
.packages::before {
  content: "";
  position: absolute; inset: 0;
  background: rgba(0,0,0,0.45);
}
.packages > * { position: relative; z-index: 2; }

/* brighter section title override (keeps visual pop) */
.packages .section-title { color: #ffd700; }

/* grid */
.package-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
  margin-top: 50px;
}
@media (max-width: 992px) { .package-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .package-grid { grid-template-columns: 1fr; } }

/* solid black boxes */
.package-box {
  background-color: rgba(0,0,0,0.95);
  border: 1px solid #d4af37;
  border-radius: 18px;
  padding: 35px 25px;
  transition: all .3s ease;
  box-shadow: 0 10px 30px rgba(0,0,0,0.6);
  text-align: center;
}
.package-box:hover { transform: translateY(-6px); box-shadow: 0 18px 40px rgba(212,175,55,0.35); }
.package-box h3 { color: #ffdb58; font-size: 1.6rem; margin-bottom: 12px; text-transform:uppercase; }
.package-box p { color: #ddd; font-size: 1rem; margin-bottom: 8px; }
.price { font-size: 2rem; color: #ffdb58; font-weight:700; margin: 18px 0; }

/* book button: gradient, no underline */
.book-btn {
  display:inline-block;
  background: linear-gradient(135deg,#d4af37,#f5e6a2);
  color: #000;
  padding: 12px 35px;
  border-radius: 35px;
  font-weight:600;
  text-decoration:none;
  letter-spacing:.5px;
  transition: all .28s ease;
  box-shadow: 0 6px 18px rgba(0,0,0,0.35);
}
.book-btn:hover { background: linear-gradient(135deg,#b9972a,#ffe57f); transform: translateY(-3px); box-shadow: 0 20px 50px rgba(255,219,88,0.2); }

/* ========== small tweaks ========== */
.section-subtle { color: #cfcfcf; max-width:900px; margin: 8px auto 0 auto; }

/* responsive hero sizing */
@media (max-width:900px){ .hero-content h1{ font-size:2.6rem;} .hero-content p{ font-size:1.2rem;} }
</style>



<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <h1>Capturing Stories, Not Just Pictures</h1>
    <p>Weddings • Events • Portraits • Cinematic Moments</p>
    <a href="#portfolio">Explore Gallery</a>
  </div>
</section>

<!-- ABOUT -->
<section class="about">
  <h2 class="section-title">Welcome to The R Studio</h2>
  <p class="section-subtle">
    Every moment tells a story, your story. At <strong>The R Studio</strong> we don’t just capture images; we create timeless memories. Whether it’s a dreamy wedding, a soulful portrait, or a lively event, our team brings artistry, passion, and perfection to every frame.
  </p>
</section>

<!-- PORTFOLIO -->
<section class="portfolio" id="portfolio">
  <h2 class="section-title">Our Work</h2>

  <!-- Weddings -->
  <div class="portfolio-category">
    <h3>Weddings</h3>
    <div class="gallery">
      <img src="{{ asset('images/wedding1.jpg') }}" alt="wedding">
      <img src="{{ asset('images/wedding2.jpg') }}" alt="wedding">
      <img src="{{ asset('images/wedding3.jpg') }}" alt="wedding">
      <img src="{{ asset('images/wedding4.jpg') }}" alt="wedding">
      <img src="{{ asset('images/wedding5.jpg') }}" alt="wedding">
      <img src="{{ asset('images/wedding6.jpg') }}" alt="wedding">
    </div>
  </div>

  <!-- Photoshoots -->
  <div class="portfolio-category">
    <h3>Photoshoots</h3>
    <div class="gallery">
      <img src="{{ asset('images/photo/photoshoot1.jpg') }}" alt="photoshoot">
      <img src="{{ asset('images/photo/photoshoot2.jpg') }}" alt="photoshoot">
      <img src="{{ asset('images/photo/photoshoot3.jpg') }}" alt="photoshoot">
      <img src="{{ asset('images/photo/photoshoot4.jpg') }}" alt="photoshoot">
      <img src="{{ asset('images/photo/photoshoot5.jpg') }}" alt="photoshoot">
      <img src="{{ asset('images/photo/photoshoot6.jpg') }}" alt="photoshoot">
    </div>
  </div>

  <!-- Parties -->
  <div class="portfolio-category">
    <h3>Parties & Events</h3>
    <div class="gallery">
      <img src="{{ asset('images/party1.jpg') }}" alt="party">
      <img src="{{ asset('images/party2.jpg') }}" alt="party">
      <img src="{{ asset('images/party3.jpg') }}" alt="party">
      <img src="{{ asset('images/party4.jpg') }}" alt="party">
      <img src="{{ asset('images/party5.jpg') }}" alt="party">
      <img src="{{ asset('images/party6.jpg') }}" alt="party">
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why-us">
  <h2 class="section-title">Why Choose Us</h2>
  <div class="features">
    <div class="feature-box">
      <i class="fas fa-award"></i>
      <h4>15+ Years of Experience</h4>
      <p>Seasoned photographers who know how to craft a perfect frame.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-users"></i>
      <h4>Award Winning Team</h4>
      <p>Creative minds with industry recognition for excellence.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-lightbulb"></i>
      <h4>Creative Storytelling</h4>
      <p>We capture emotion, light, and story in every image.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-camera"></i>
      <h4>Luxury Equipment</h4>
      <p>Premium lenses, lighting and gear for flawless captures.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-magic"></i>
      <h4>Professional Editing</h4>
      <p>High-end retouching that preserves authenticity and beauty.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-heart"></i>
      <h4>Client Satisfaction</h4>
      <p>We prioritize your vision and deliver beyond expectations.</p>
    </div>
  </div>
</section>

<!-- OUR PACKAGES -->
<section class="packages">
  <h2 class="section-title">Our Packages</h2>
  <div class="package-grid">
    <div class="package-box">
      <h3>Silver</h3>
      <p>2 Hours Coverage</p>
      <p>50 Edited Photos</p>
      <p>Online Gallery Access</p>
      <div class="price">$199</div>
      <a href="{{ url('/contact') }}" class="book-btn">Book Now</a>
    </div>

    <div class="package-box">
      <h3>Gold</h3>
      <p>4 Hours Coverage</p>
      <p>100 Edited Photos</p>
      <p>1 Highlight Video</p>
      <div class="price">$349</div>
      <a href="{{ url('/contact') }}" class="book-btn">Book Now</a>
    </div>

    <div class="package-box">
      <h3>Platinum</h3>
      <p>8 Hours Coverage</p>
      <p>200 Edited Photos</p>
      <p>Full Video Coverage</p>
      <div class="price">$599</div>
      <a href="{{ url('/contact') }}" class="book-btn">Book Now</a>
    </div>

    <div class="package-box">
      <h3>Royal</h3>
      <p>Full Day Coverage</p>
      <p>Unlimited Photos</p>
      <p>Drone + Cinematic Film</p>
      <div class="price">$999</div>
      <a href="{{ url('/contact') }}" class="book-btn">Book Now</a>
    </div>
  </div>
</section>
@endsection
