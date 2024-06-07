@extends('items.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">View Product</h4>
                    <a href="{{ url('/items') }}" class="btn btn-light btn-sm">
                        <i class="fa fa-arrow-left"></i> Go Back
                    </a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Product ID:</h5>
                        <p class="card-text">{{ $item->product_id }}</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Product Name:</h5>
                        <p class="card-text">{{ $item->item_name }}</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Price:</h5>
                        <p class="card-text">${{ $item->price }}</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Quantity:</h5>
                        <p class="card-text">{{ $item->quantity }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
