<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | The R Studio</title>

  <!-- ✅ Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;600&display=swap');

    :root {
      --grey: #555;
      --black: #0f0f0f;
      --white: #fff;
      --gold: #d4af37;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--black);
      color: var(--white);
      margin: 0;
      padding: 0;
    }

    /* ✅ Navbar */
    nav.navbar {
      background: linear-gradient(to bottom, var(--grey) 0%, var(--black) 100%);
      border-bottom: 2px solid var(--gold);
      padding: 10px 5%;
    }

    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      color: var(--white) !important;
    }

    .navbar-nav .nav-link {
      color: var(--white) !important;
      font-weight: 500;
      margin: 0 5px;
      transition: 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: var(--gold) !important;
    }

    .navbar-toggler {
      border-color: var(--gold);
    }

    .navbar-toggler-icon {
      filter: invert(1) brightness(2);
    }

    /* ✅ Improved Mobile Menu */
    @media (max-width: 992px) {
      .navbar-collapse {
        background-color: rgba(0, 0, 0, 0.95);
        border: 2px solid var(--gold);
        border-radius: 10px;
        padding: 15px 0;
        margin-top: 10px;
        text-align: left; /* ✅ Added — aligns text to the left */
      }

      .navbar-nav {
        align-items: flex-start; /* ✅ Added — ensures items align to left side */
        text-align: left; /* ✅ Added */
      }

      .navbar-nav .nav-item {
        margin: 8px 20px; /* ✅ Added little left spacing for cleaner look */
      }

      .navbar-nav .nav-link {
        color: var(--white) !important;
        font-size: 1.1rem;
        font-weight: 500;
        display: block;
        transition: 0.3s;
      }

      .navbar-nav .nav-link:hover {
        background-color: var(--gold);
        color: var(--black) !important;
        border-radius: 8px;
        padding-left: 10px;
      }
    }

    /* ✅ Hero Section */
    .hero {
      background: url('https://images.unsplash.com/photo-1504203700686-0f1759287af0?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: var(--white);
      position: relative;
    }

    .hero::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.6);
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 0 10px;
    }

    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      color: var(--gold);
    }

    .btn {
      background: var(--grey);
      color: var(--white);
      padding: 12px 25px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      margin-top: 20px;
      transition: 0.3s;
    }

    .btn:hover {
      background: var(--white);
      color: var(--black);
    }

    /* ✅ Footer */
    footer {
      background: var(--black);
      color: var(--white);
      text-align: center;
      padding: 20px;
      margin-top: 60px;
      border-top: 2px solid var(--gold);
    }
  </style>
</head>
<body>

  <!-- ✅ Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
      <a href="{{ url('/') }}" class="navbar-brand">The R Studio</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end text-lg-end text-start" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('cart.show') }}">Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>

  <footer>
    &copy; {{ date('Y') }} The R Studio | Designed with ❤️ by Ronaq
  </footer>

  <!-- ✅ Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
