<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
{
    $categories = [
        'dairy' => [
            'name' => 'Dairy Products',
            'emoji' => '🥛',
            'products' => [
                ['id' => 1, 'name' => 'Fresh Milk', 'description' => 'Farm-fresh pasteurized milk', 'price' => 4.99, 'emoji' => '🥛'],
                ['id' => 2, 'name' => 'Yogurt', 'description' => 'Creamy natural yogurt', 'price' => 3.49, 'emoji' => '🍶'],
                ['id' => 3, 'name' => 'Cheese', 'description' => 'Aged cheddar cheese', 'price' => 6.99, 'emoji' => '🧀'],
            ]
        ],
        'animal-feed' => [
            'name' => 'Animal Feed',
            'emoji' => '🌾',
            'products' => [
                ['id' => 4, 'name' => 'Premium Cattle Feed', 'description' => 'Nutritionally balanced feed', 'price' => 24.99, 'emoji' => '🌾'],
                ['id' => 5, 'name' => 'Organic Hay', 'description' => 'Chemical-free hay bales', 'price' => 12.99, 'emoji' => '🥬'],
            ]
        ],
        // Add other categories similarly...
    ];

    return view('products', compact('categories'));
}
}
