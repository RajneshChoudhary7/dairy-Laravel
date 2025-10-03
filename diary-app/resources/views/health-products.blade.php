@extends('layouts.app')

@section('title', 'Health Products - Dairy Sathi')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Health Products Collection</h2>
    <div class="row">
        @php
            $healthProducts = [
                ['name' => 'Protein Milkshake 200ml', 'price' => 60, 'image' => 'images/health1.jpg'],
                ['name' => 'Whey Protein Powder 1kg', 'price' => 2200, 'image' => 'images/health2.jpg'],
                ['name' => 'Herbal Energy Drink 250ml', 'price' => 80, 'image' => 'images/health3.jpg'],
                ['name' => 'Organic Honey 500g', 'price' => 350, 'image' => 'images/health4.jpg'],
                ['name' => 'Green Tea 100g', 'price' => 150, 'image' => 'images/health5.jpg'],
                ['name' => 'Almond Milk 1L', 'price' => 200, 'image' => 'images/health6.jpg'],
                ['name' => 'Soy Milk 1L', 'price' => 180, 'image' => 'images/health7.jpg'],
                ['name' => 'Herbal Chyawanprash 500g', 'price' => 250, 'image' => 'images/health8.jpg'],
                ['name' => 'Immunity Booster Tablets', 'price' => 400, 'image' => 'images/health9.jpg'],
                ['name' => 'Flax Seeds 250g', 'price' => 120, 'image' => 'images/health10.jpg'],
                ['name' => 'Oats 1kg', 'price' => 180, 'image' => 'images/health11.jpg'],
                ['name' => 'Multivitamin Capsules', 'price' => 600, 'image' => 'images/health12.jpg'],
                ['name' => 'Peanut Butter 500g', 'price' => 250, 'image' => 'images/health13.jpg'],
                ['name' => 'Herbal Juice (Aloe Vera) 1L', 'price' => 300, 'image' => 'images/health14.jpg'],
                ['name' => 'Dates 500g', 'price' => 200, 'image' => 'images/health15.jpg'],
                ['name' => 'Dry Fruits Mix 250g', 'price' => 300, 'image' => 'images/health16.jpg'],
                ['name' => 'Diabetic Friendly Cookies 200g', 'price' => 150, 'image' => 'images/health17.jpg'],
                ['name' => 'Low Fat Yogurt 400g', 'price' => 80, 'image' => 'images/health18.jpg'],
                ['name' => 'Herbal Tea (Tulsi) 100g', 'price' => 120, 'image' => 'images/health19.jpg'],
                ['name' => 'Protein Bar (Pack of 6)', 'price' => 450, 'image' => 'images/health20.jpg'],
                ['name' => 'Energy Drink Powder 500g', 'price' => 600, 'image' => 'images/health21.jpg'],
                ['name' => 'Omega-3 Capsules (Fish Oil)', 'price' => 750, 'image' => 'images/health22.jpg'],
                ['name' => 'Organic Jaggery 1kg', 'price' => 180, 'image' => 'images/health23.jpg'],
                ['name' => 'Sunflower Seeds 250g', 'price' => 130, 'image' => 'images/health24.jpg'],
                ['name' => 'Organic Quinoa 500g', 'price' => 220, 'image' => 'images/health25.jpg'],
                ['name' => 'Chia Seeds 250g', 'price' => 150, 'image' => 'images/health26.jpg'],
                ['name' => 'Granola Mix 500g', 'price' => 280, 'image' => 'images/health27.jpg'],
                ['name' => 'Detox Herbal Powder 200g', 'price' => 190, 'image' => 'images/health28.jpg'],
                ['name' => 'Probiotic Drink 200ml', 'price' => 50, 'image' => 'images/health29.jpg'],
                ['name' => 'Amla Candy 250g', 'price' => 100, 'image' => 'images/health30.jpg'],
                ['name' => 'Immunity Kadha 100g', 'price' => 120, 'image' => 'images/health31.jpg'],
                ['name' => 'Calcium Tablets', 'price' => 500, 'image' => 'images/health32.jpg'],
                ['name' => 'Vitamin D3 Sachets', 'price' => 400, 'image' => 'images/health33.jpg'],
                ['name' => 'Sugar Free Cookies 200g', 'price' => 160, 'image' => 'images/health34.jpg'],
                ['name' => 'Low Carb Snack 100g', 'price' => 120, 'image' => 'images/health35.jpg'],
            ];
        @endphp

        @foreach($healthProducts as $product)
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
