@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel CRUD Assignment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('login') }}"> Login</a>
            </div>
        </div>
    </div>



    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
         </tr>
        @endforeach

    </table>
    {{ $products->links() }}


@endsection
