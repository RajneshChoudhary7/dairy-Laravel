@extends('layouts.app')

@section('title', 'Ice Cream Products - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Ice Cream Collection</h2>
    <div class="row">
        @php
            $iceCreamProducts = [
                ['name' => 'Vanilla Ice Cream 500ml', 'price' => 150, 'image' => 'images/ice1.jpg'],
                ['name' => 'Chocolate Ice Cream 1L', 'price' => 280, 'image' => 'images/ice2.jpg'],
                ['name' => 'Strawberry Ice Cream 500ml', 'price' => 170, 'image' => 'images/ice3.jpg'],
                ['name' => 'Mango Ice Cream 1L', 'price' => 300, 'image' => 'images/ice4.jpg'],
                ['name' => 'Butter Scotch 500ml', 'price' => 190, 'image' => 'images/ice5.jpg'],
                ['name' => 'Black Current 750ml', 'price' => 250, 'image' => 'images/ice6.jpg'],
                ['name' => 'Kulfi Stick 6pcs', 'price' => 120, 'image' => 'images/ice7.jpg'],
                ['name' => 'Matka Kulfi 250ml', 'price' => 90, 'image' => 'images/ice8.jpg'],
                ['name' => 'Choco Chip Ice Cream 500ml', 'price' => 200, 'image' => 'images/ice9.jpg'],
                ['name' => 'Premium Sundae 300ml', 'price' => 220, 'image' => 'images/ice10.jpg'],
            ];
        @endphp

        @foreach($iceCreamProducts as $product)
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
