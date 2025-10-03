@extends('layouts.app')

@section('title', 'Fresh Dahi - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Dahi Collection</h2>
    <div class="row">
        <!-- Example Product Card -->
        @php
            $dahiProducts = [
    ['name' => 'Plain Dahi 500g', 'price' => 40, 'image' => 'https://images.unsplash.com/photo-1588165173131-d0ca6ee6c53f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Low Fat Dahi 1kg', 'price' => 75, 'image' => 'https://images.unsplash.com/photo-1608832787716-2ff473e9db6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Probiotic Dahi 200g', 'price' => 25, 'image' => 'https://images.unsplash.com/photo-1570194065650-2c0b36ee8c2e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Flavored Dahi (Mango)', 'price' => 45, 'image' => 'https://images.unsplash.com/photo-1622302536626-829bbb6acbef?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Greek Yogurt 400g', 'price' => 120, 'image' => 'https://images.unsplash.com/photo-1488477181946-6428a0291777?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Matka Dahi 1kg', 'price' => 90, 'image' => 'https://images.unsplash.com/photo-1630918037678-e118df5bf8e1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Organic Dahi 500g', 'price' => 65, 'image' => 'https://images.unsplash.com/photo-1567176301282-16ed969ceb28?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Rich Creamy Dahi 1kg', 'price' => 110, 'image' => 'https://images.unsplash.com/photo-1593874104710-8b5a9ef61cad?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Diet Friendly Dahi 200g', 'price' => 35, 'image' => 'https://images.unsplash.com/photo-1593874104710-8b5a9ef61cad?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ['name' => 'Sweet Lassi Dahi Mix', 'price' => 50, 'image' => 'https://images.unsplash.com/photo-1630918037678-e118df5bf8e1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80']
];
        @endphp

        @foreach($dahiProducts as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($product['image']) }}" 
                         alt="{{ $product['name'] }}" 
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
