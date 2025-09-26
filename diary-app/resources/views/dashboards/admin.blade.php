@extends('layouts.app')

@section('title', 'Dashboard - Dairy Management')

@section('content')
<div class="container mt-5">
    <h2>Welcome, {{ auth()->user()->name }} 🎉</h2>
    <p>You are logged in successfully with role: <b>{{ auth()->user()->role }}</b></p>
</div>
@endsection
