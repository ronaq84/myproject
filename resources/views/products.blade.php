@extends('layouts.app')
@section('title', 'Rent Cameras')

@section('content')
<style>
/* ===================== PRODUCTS PAGE ===================== */
.cart-section {
  padding: 80px 5%;
  background: linear-gradient(to bottom, rgba(85,85,85,0.8) 0%, rgba(15,15,15,1) 80%);
  color: #fff;
  text-align: center;
}

.cart-section h2 {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  color: #d4af37;
  margin-bottom: 50px;
}

.camera-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

.camera-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid #333;
  border-radius: 15px;
  padding: 20px;
  transition: all 0.3s ease;
  box-shadow: 0 8px 25px rgba(0,0,0,0.4);
  text-align: center;
}
.camera-card:hover {
  border-color: #d4af37;
  transform: translateY(-6px);
  box-shadow: 0 15px 35px rgba(212,175,55,0.3);
}

.camera-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 12px;
  margin-bottom: 15px;
}

.camera-card h3 {
  font-size: 1.3rem;
  color: #ffdb58;
  margin-bottom: 10px;
}

.camera-card p {
  color: #ddd;
  font-size: 1.1rem;
  margin-bottom: 15px;
}

.add-btn {
  display: inline-block;
  background: linear-gradient(135deg,#d4af37,#f5e6a2);
  color: #000;
  padding: 10px 25px;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}
.add-btn:hover {
  background: linear-gradient(135deg,#b9972a,#ffe57f);
  transform: translateY(-3px);
}

/* RESPONSIVE */
@media(max-width: 992px) {
  .camera-grid { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width: 600px) {
  .camera-grid { grid-template-columns: 1fr; }
}
</style>

<section class="cart-section">
  <h2>Rent Our Cameras</h2>

  <div class="camera-grid">
    <!-- Camera 1 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera1.jpg') }}" alt="Camera 1">
      <h3>Canon EOS R5</h3>
      <p>Rent: $15/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="name" value="Canon EOS R5">
        <input type="hidden" name="price" value="15">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera1.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 2 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera2.jpg') }}" alt="Camera 2">
      <h3>Nikon Z7 II</h3>
      <p>Rent: $15/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="2">
        <input type="hidden" name="name" value="Nikon Z7 II">
        <input type="hidden" name="price" value="15">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera2.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 3 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera3.jpg') }}" alt="Camera 3">
      <h3>Sony Alpha A7 IV</h3>
      <p>Rent: $10/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="3">
        <input type="hidden" name="name" value="Sony Alpha A7 IV">
        <input type="hidden" name="price" value="10">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera3.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 4 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera4.jpg') }}" alt="Camera 4">
      <h3>Fujifilm X-T4</h3>
      <p>Rent: $20/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="4">
        <input type="hidden" name="name" value="Fujifilm X-T4">
        <input type="hidden" name="price" value="20">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera4.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 5 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera5.jpg') }}" alt="Camera 5">
      <h3>Panasonic Lumix S5</h3>
      <p>Rent: $10/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="5">
        <input type="hidden" name="name" value="Panasonic Lumix S5">
        <input type="hidden" name="price" value="10">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera5.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 6 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera6.jpg') }}" alt="Camera 6">
      <h3>Canon EOS 5D Mark IV</h3>
      <p>Rent: $20/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="6">
        <input type="hidden" name="name" value="Canon EOS 5D Mark IV">
        <input type="hidden" name="price" value="20">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera6.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 7 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera7.jpg') }}" alt="Camera 7">
      <h3>Nikon D850</h3>
      <p>Rent: $12/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="7">
        <input type="hidden" name="name" value="Nikon D850">
        <input type="hidden" name="price" value="12">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera7.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 8 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera8.jpg') }}" alt="Camera 8">
      <h3>Sony Alpha A1</h3>
      <p>Rent: $15/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="8">
        <input type="hidden" name="name" value="Sony Alpha A1">
        <input type="hidden" name="price" value="15">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera8.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 9 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera9.jpg') }}" alt="Camera 9">
      <h3>Fujifilm GFX 100S</h3>
      <p>Rent: $15/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="9">
        <input type="hidden" name="name" value="Fujifilm GFX 100S">
        <input type="hidden" name="price" value="15">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera9.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 10 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera10.jpg') }}" alt="Camera 10">
      <h3>Panasonic GH5</h3>
      <p>Rent: $20/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="10">
        <input type="hidden" name="name" value="Panasonic GH5">
        <input type="hidden" name="price" value="20">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera10.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 11 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera11.jpg') }}" alt="Camera 11">
      <h3>Canon EOS R6</h3>
      <p>Rent: $10/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="11">
        <input type="hidden" name="name" value="Canon EOS R6">
        <input type="hidden" name="price" value="10">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera11.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

    <!-- Camera 12 -->
    <div class="camera-card">
      <img src="{{ asset('images/cameras/camera12.jpg') }}" alt="Camera 12">
      <h3>Nikon Z6 II</h3>
      <p>Rent: $12/day</p>
      <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="12">
        <input type="hidden" name="name" value="Nikon Z6 II">
        <input type="hidden" name="price" value="15">
        <input type="hidden" name="image" value="{{ asset('images/cameras/camera12.jpg') }}">
        <button type="submit" class="add-btn">Add to Cart</button>
      </form>
    </div>

  </div>
</section>
@endsection
