<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show form
    public function create()
    {
        return view('products.create');
    }

    // Store product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'discount' => 'nullable|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'discount' => $request->discount ?? 0,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    //////////////



    // Show all products
public function index()
{
    $products = Product::all();
    return view('products.index', compact('products'));
}

// Show edit form
public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

// Update product
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'discount' => 'nullable|integer',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $product = Product::findOrFail($id);

    $imageName = $product->image;
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    }

    $product->update([
        'name' => $request->name,
        'category' => $request->category,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'discount' => $request->discount ?? 0,
        'description' => $request->description,
        'image' => $imageName,
    ]);

    return redirect()->route('products.index')->with('success', 'Product updated successfully!');
}

// Delete product
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
}

///////////////////

public function grid()
{
    $products = Product::all();
    return view('products.grid', compact('products'));
}


}
