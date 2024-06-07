@extends('items.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Add New Item</div>
                <div class="card-body">
                  
                    <form action="{{ url('items') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="product_id">Product ID</label>
                            <input type="text" name="product_id" id="product_id" class="form-control" placeholder="Enter Product ID">
                        </div>
                        <div class="form-group mb-3">
                            <label for="item_name">Product Name</label>
                            <input type="text" name="item_name" id="item_name" class="form-control" placeholder="Enter Product Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Enter Price">
                        </div>
                        <div class="form-group mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter Quantity">
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ url('/items') }}" class="btn btn-secondary">Go Back</a>
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
