@extends('layouts.app')

@section('title', 'Milk Products - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Milk Collection</h2>
    <div class="row">
        @php
           
$milkProducts = [
    [
        'name' => 'Full Cream Milk 1L',
        'price' => 65,
        'image' => 'https://images.unsplash.com/photo-1563636619-e9143da7973b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Toned Milk 1L',
        'price' => 55,
        'image' => 'https://images.unsplash.com/photo-1606787620819-8bdf0c44b332?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Double Toned Milk 500ml',
        'price' => 25,
        'image' => 'https://images.unsplash.com/photo-1606787375041-3e2e3d5c7f0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Skimmed Milk 1L',
        'price' => 60,
        'image' => 'https://images.unsplash.com/photo-1606787620819-8bdf0c44b332?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Organic Cow Milk 1L',
        'price' => 75,
        'image' => 'https://images.unsplash.com/photo-1611915318129-22a3d9a7f774?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Buffalo Milk 1L',
        'price' => 80,
        'image' => 'https://images.unsplash.com/photo-1606787375041-3e2e3d5c7f0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Flavored Milk (Chocolate) 200ml',
        'price' => 30,
        'image' => 'https://images.unsplash.com/photo-1623058450328-6f8e0c2c43d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Flavored Milk (Mango) 200ml',
        'price' => 30,
        'image' => 'https://images.unsplash.com/photo-1603532648955-a5e2e3b9b8d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'A2 Cow Milk 1L',
        'price' => 120,
        'image' => 'https://images.unsplash.com/photo-1611915318129-22a3d9a7f774?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Long Life Milk 1L',
        'price' => 90,
        'image' => 'https://images.unsplash.com/photo-1598273758312-2a743d9a4a61?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Raw Desi Cow Milk 1L',
        'price' => 100,
        'image' => 'https://images.unsplash.com/photo-1606787375041-3e2e3d5c7f0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
    [
        'name' => 'Fresh Farm Milk 500ml',
        'price' => 40,
        'image' => 'https://images.unsplash.com/photo-1606787620819-8bdf0c44b332?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ],
];
        @endphp

        @foreach($milkProducts as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                         class="card-img-top" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">{{ $product['name'] }}</h6>
                        <p class="text-success">₹ {{ number_format($product['price'], 2) }}</p>
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                        <a href="#" class="btn btn-warning btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
