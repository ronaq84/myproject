<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;

// Static pages
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/products', 'products')->name('products');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

// Cart and Checkout Routes
Route::get('/cart', [CartController::class, 'checkout'])->name('cart.show'); // Display cart items
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add'); // Add item to cart
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout'); // Checkout page (optional, can be same as cart)
Route::post('/checkout', [CartController::class, 'placeOrder'])->name('checkout.placeOrder'); // Place order
