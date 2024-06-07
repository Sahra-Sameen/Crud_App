@extends('items.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Edit Item</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('items/' . $item->id) }}" method="post">
                        @csrf
                        @method("PATCH")
                        <div class="form-group mb-3">
                            <label for="pid">Product ID</label>
                            <input type="text" name="product_id" id="pid" value="{{ $item->product_id }}" class="form-control" placeholder="Enter Product ID">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pname">Product Name</label>
                            <input type="text" name="item_name" id="pname" value="{{ $item->item_name }}" class="form-control" placeholder="Enter Product Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" value="{{ $item->price }}" class="form-control" placeholder="Enter Price">
                        </div>
                        <div class="form-group mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" id="quantity" value="{{ $item->quantity }}" class="form-control" placeholder="Enter Quantity">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Update" class="btn btn-success">
                            <a href="{{ url('/items') }}" class="btn btn-secondary">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
