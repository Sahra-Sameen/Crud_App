@extends('items.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Items Page</div>
  <div class="card-body">
    <form action="{{ url('items') }}" method="post">
    @csrf
    <label for="product_id">Product ID</label><br>
    <input type="text" name="product_id" id="product_id" class="form-control"><br>
    <label for="item_name">Product Name</label><br>
    <input type="text" name="item_name" id="item_name" class="form-control"><br>
    <label for="price">Price</label><br>
    <input type="text" name="price" id="price" class="form-control"><br>
    <label for="quantity">Quantity</label><br>
    <input type="text" name="quantity" id="quantity" class="form-control"><br>
    <input type="submit" value="Save" class="btn btn-success"><br>
</form>
   
  </div>
</div>
 
@stop