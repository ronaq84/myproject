<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Show Cart Page
    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Add item to Cart
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id; // Unique ID for each camera

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $request->name,
                "price" => $request->price,
                "quantity" => 1,
                "image" => $request->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Item added to cart!');
    }

    // Checkout page
    public function checkout()
    {
        $cart = session()->get('cart', []);
        return view('checkout', compact('cart'));
    }

    // Place order
    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'payment_method' => 'required',
        ]);

        // Here, you can save order to database if needed
        session()->forget('cart');

        return redirect()->route('products')->with('success', 'Order placed successfully!');
    }
}
