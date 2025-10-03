@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Checkout</h2>

    @if(empty($cart))
        <div class="alert alert-info">Your cart is empty!</div>
    @else
        <div class="row">
            <!-- Left: Items Summary -->
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Order Summary</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach($cart as $id => $item)
                                    @php
                                        $qty = $item['quantity'] ?? 1;
                                        $price = $item['price'] ?? 0;
                                        $subtotal = $price * $qty;
                                        $total += $subtotal;
                                    @endphp
                                    <tr>
                                        <td style="width:90px;">
                                            <img src="{{ $item['image'] ? asset('uploads/products/'.$item['image']) : 'https://via.placeholder.com/80' }}" alt="{{ $item['name'] }}" style="width:80px; height:80px; object-fit:cover;">
                                        </td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>₹{{ number_format($price,2) }}</td>
                                        <td>{{ $qty }}</td>
                                        <td>₹{{ number_format($subtotal,2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="text-end">
                            <h5>Total: ₹{{ number_format($total, 2) }}</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Billing / Place Order -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="mb-3">Billing Details</h5>
                    <form action="{{ route('checkout.placeOrder') }}" method="POST">
                        @csrf

                        <div class="mb-2">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Address</label>
                            <textarea name="address" rows="3" class="form-control" required></textarea>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Payment Method</label>
                            <select name="payment_method" class="form-select" required>
                                <option value="cod">Cash on Delivery</option>
                                <option value="card">Card</option>
                                <option value="upi">UPI</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100 mt-3">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
