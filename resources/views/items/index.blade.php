@extends('items.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2>Inventory Management</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/items/create') }}" class="btn btn-success mb-3">
                        <i class="fa fa-plus"></i> Add New Item
                    </a>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->product_id }}</td>
                                    <td>{{ $item->item_name }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                        <a href="{{ url('/items/' . $item->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                        <a href="{{ url('/items/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <form method="POST" action="{{ url('/items/' . $item->id) }}" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
