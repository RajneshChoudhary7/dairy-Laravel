@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome Admin, {{ Auth::user()->name }}</h1>
    <p>You have full access to the system.</p>
</div>
@endsection
