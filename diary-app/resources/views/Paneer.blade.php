@extends('layouts.app')

@section('title', 'Paneer Products - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Paneer Collection</h2>
    <div class="row">
        @php
            $paneerProducts = [
                ['name' => 'Fresh Paneer 200g', 'price' => 90, 'image' => 'images/paneer1.jpg'],
                ['name' => 'Malai Paneer 500g', 'price' => 220, 'image' => 'images/paneer2.jpg'],
                ['name' => 'Organic Paneer 200g', 'price' => 120, 'image' => 'images/paneer3.jpg'],
                ['name' => 'Low Fat Paneer 200g', 'price' => 80, 'image' => 'images/paneer4.jpg'],
                ['name' => 'Masala Paneer Cubes 250g', 'price' => 140, 'image' => 'images/paneer5.jpg'],
                ['name' => 'Frozen Paneer 1kg', 'price' => 400, 'image' => 'images/paneer6.jpg'],
                ['name' => 'Tofu Paneer 200g', 'price' => 100, 'image' => 'images/paneer7.jpg'],
                ['name' => 'Premium Soft Paneer 500g', 'price' => 250, 'image' => 'images/paneer8.jpg'],
                ['name' => 'Paneer Block 1kg', 'price' => 450, 'image' => 'images/paneer9.jpg'],
                ['name' => 'Cottage Paneer 250g', 'price' => 150, 'image' => 'images/paneer10.jpg'],
            ];
        @endphp

        @foreach($paneerProducts as $product)
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
