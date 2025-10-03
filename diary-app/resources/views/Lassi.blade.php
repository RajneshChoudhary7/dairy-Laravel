@extends('layouts.app')

@section('title', 'Lassi Products - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Lassi Collection</h2>
    <div class="row">
        @php
            $lassiProducts = [
                ['name' => 'Sweet Lassi 200ml', 'price' => 25, 'image' => 'images/lassi1.jpg'],
                ['name' => 'Salted Lassi 200ml', 'price' => 25, 'image' => 'images/lassi2.jpg'],
                ['name' => 'Mango Lassi 200ml', 'price' => 35, 'image' => 'images/lassi3.jpg'],
                ['name' => 'Strawberry Lassi 200ml', 'price' => 40, 'image' => 'images/lassi4.jpg'],
                ['name' => 'Rose Lassi 250ml', 'price' => 45, 'image' => 'images/lassi5.jpg'],
                ['name' => 'Kesar Lassi 200ml', 'price' => 50, 'image' => 'images/lassi6.jpg'],
                ['name' => 'Matka Lassi 500ml', 'price' => 70, 'image' => 'images/lassi7.jpg'],
                ['name' => 'Mint Flavored Lassi 200ml', 'price' => 30, 'image' => 'images/lassi8.jpg'],
                ['name' => 'Cardamom Lassi 200ml', 'price' => 35, 'image' => 'images/lassi9.jpg'],
                ['name' => 'Premium Punjabi Lassi 1L', 'price' => 120, 'image' => 'images/lassi10.jpg'],
                ['name' => 'Probiotic Lassi 200ml', 'price' => 40, 'image' => 'images/lassi11.jpg'],
                ['name' => 'Desi Malai Lassi 500ml', 'price' => 80, 'image' => 'images/lassi12.jpg'],
            ];
        @endphp

        @foreach($lassiProducts as $product)
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
