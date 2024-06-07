@extends('items.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Item</div>
  <div class="card-body">
      
      <form action="{{ url('items/' . $item->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $item->id }}">
        <label for="pid">Product ID</label><br>
        <input type="text" name="product_id" id="pid" value="{{ $item->product_id }}" class="form-control"><br>
        <label for="pname">Product Name</label><br>
        <input type="text" name="item_name" id="pname" value="{{ $item->item_name }}" class="form-control"><br>
        <label for="price">Price</label><br>
        <input type="text" name="price" id="price" value="{{ $item->price }}" class="form-control"><br>
        <label for="quantity">Quantity</label><br>
        <input type="text" name="quantity" id="quantity" value="{{ $item->quantity }}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
   
  </div>
</div>
 
@endsection
