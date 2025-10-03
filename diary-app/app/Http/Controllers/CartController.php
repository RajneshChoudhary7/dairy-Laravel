<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Add product to cart
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Get existing cart from session
        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            // If product already in cart, increase quantity
            $cart[$id]['quantity']++;
        } else {
            // Add new product to cart
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', $product->name . ' added to cart!');
    }

    // Show Cart Page
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Update quantity
    public function update(Request $request, $id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Cart updated!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }

    // Remove product from cart
    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }
}
