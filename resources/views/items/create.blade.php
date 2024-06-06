@extends('items.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Items Page</div>
  <div class="card-body">
      
      <form action="{{ url('items') }}" method="post">
        {!! csrf_field() !!}
        <label>Product ID</label></br>
        <input type="text" name="pid" id="product_id" class="form-control"></br>
        <label>Product Name</label></br>
        <input type="text" name="pname" id="item_name" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop