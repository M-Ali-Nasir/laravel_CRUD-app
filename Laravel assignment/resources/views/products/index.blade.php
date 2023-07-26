@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel CRUD Assignment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" style="margin-right:5px" href="{{ route('logout') }}"> Log out</a>
            </div>
        </div>
    </div>

    @if ($product = Session::get('success'))
    <div class="alert alert-success" id="alertDiv" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{$product}}</strong> is Created as a product!
    </div>
    @endif

    @if ($name = Session::get('updated'))
    <div class="alert alert-primary" id="alertDiv" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        The Product is updated to <strong> {{$name}}</strong>
    </div>
    @endif

    @if ($product = Session::get('danger'))
    
    <div class="alert alert-danger" id="alertDiv" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{$product->name}}</strong> has been deleted!
    </div>

    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $products->links() }}


@endsection
