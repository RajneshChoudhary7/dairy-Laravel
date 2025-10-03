@extends('layouts.app')

@section('title', 'Ghee Products - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Ghee Collection</h2>
    <div class="row">
        @php
            $gheeProducts = [
                ['name' => 'Cow Ghee 500ml', 'price' => 350, 'image' => 'images/ghee1.jpg'],
                ['name' => 'Buffalo Ghee 1L', 'price' => 600, 'image' => 'images/ghee2.jpg'],
                ['name' => 'Organic Ghee 500ml', 'price' => 450, 'image' => 'images/ghee3.jpg'],
                ['name' => 'A2 Desi Cow Ghee 1L', 'price' => 950, 'image' => 'images/ghee4.jpg'],
                ['name' => 'Herbal Ghee 500ml', 'price' => 500, 'image' => 'images/ghee5.jpg'],
                ['name' => 'Traditional Bilona Ghee 1L', 'price' => 1200, 'image' => 'images/ghee6.jpg'],
                ['name' => 'Premium Desi Ghee 250ml', 'price' => 250, 'image' => 'images/ghee7.jpg'],
                ['name' => 'Rich Flavored Ghee 500ml', 'price' => 480, 'image' => 'images/ghee8.jpg'],
                ['name' => 'Diet Friendly Ghee 200ml', 'price' => 180, 'image' => 'images/ghee9.jpg'],
                ['name' => 'Matka Ghee 1kg', 'price' => 1300, 'image' => 'images/ghee10.jpg'],
            ];
        @endphp

        @foreach($gheeProducts as $product)
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
