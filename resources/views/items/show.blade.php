@extends('items.layout')
@section('content')

<div class="card">
    <div class="card-header">View Product</div>
    <div class="card-body">
        <h5 class="card-title">Product ID: {{ $item->product_id }}</h5>
        <p class="card-text">Product Name: {{ $item->item_name }}</p>
        <p class="card-text">Price: {{ $item->price }}</p>
        <p class="card-text">Quantity: {{ $item->quantity }}</p>
    </div>
</div>

@endsection