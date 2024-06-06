@extends('items.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('items/' .$items->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$items->id}}" id="id" />
        <label>Product ID</label></br>
        <input type="text" name="pid" id="pid" value="{{$items->product_id}}" class="form-control"></br>
        <label>Product Name</label></br>
        <input type="text" name="pname" id="pname" value="{{$items->item_name}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$items->price}}" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="text" name="quantity" id="quantity" value="{{$items->quantity}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop