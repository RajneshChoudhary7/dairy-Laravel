<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class SupplierController extends Controller
{
    public function index()
    {
        $supplierId = Auth::id();
        $products = Product::where('supplier_id', $supplierId)->get();

        return view('dashboards.supplier', compact('products'));
    }
}
