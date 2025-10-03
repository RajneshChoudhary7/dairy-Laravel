<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CheckoutController extends Controller
{
    // Buy Now (POST) — single product: product को session में cart बनाकर checkout (GET) पर redirect करता है
    public function buyNow(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Temporary single-item cart
        $cart = [
            $id => [
                'name'     => $product->name,
                'price'    => $product->price,
                'quantity' => 1,
                'image'    => $product->image,
            ]
        ];

        // Replace session cart with this single-item cart (so checkout page shows only this product)
        session()->put('cart', $cart);

        // Redirect to checkout page (GET)
        return redirect()->route('checkout');
    }

    // Cart Checkout (GET) — shows whatever is in session('cart')
    public function cartCheckout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        return view('checkout.index', compact('cart'));
    }

    // Place Order (mock) — process and clear cart
    public function placeOrder(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        // TODO: save order in DB, payment handling, etc.

        // Clear cart after placing order
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}
