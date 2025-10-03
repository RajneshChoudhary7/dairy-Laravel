@extends('layouts.app')

@section('title', 'Butter Products - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Butter Collection</h2>
    <div class="row">
        @php
            $butterProducts = [
                ['name' => 'Salted Butter 200g', 'price' => 110, 'image' => 'images/butter1.jpg'],
                ['name' => 'Unsalted Butter 200g', 'price' => 115, 'image' => 'images/butter2.jpg'],
                ['name' => 'Organic Butter 250g', 'price' => 140, 'image' => 'images/butter3.jpg'],
                ['name' => 'White Butter 500g', 'price' => 200, 'image' => 'images/butter4.jpg'],
                ['name' => 'Herbal Butter 150g', 'price' => 130, 'image' => 'images/butter5.jpg'],
                ['name' => 'Desi Makhan 1kg', 'price' => 450, 'image' => 'images/butter6.jpg'],
                ['name' => 'Spread Butter 180g', 'price' => 90, 'image' => 'images/butter7.jpg'],
                ['name' => 'Low Fat Butter 200g', 'price' => 120, 'image' => 'images/butter8.jpg'],
                ['name' => 'Premium Table Butter 500g', 'price' => 250, 'image' => 'images/butter9.jpg'],
                ['name' => 'Flavored Butter (Garlic) 200g', 'price' => 150, 'image' => 'images/butter10.jpg'],
            ];
        @endphp

        @foreach($butterProducts as $product)
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
