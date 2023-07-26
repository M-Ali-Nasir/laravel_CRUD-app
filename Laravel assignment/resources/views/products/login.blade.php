<!-- resources/views/login.blade.php -->

@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
    <h2>Login</h2>
</div>
</div>
    @if(session('error'))
        <p style="color: red; margin: 0 20px 20px 0">{{ session('error') }}</p>
    @endif
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder = "Enter Password" required>
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder = "Enter Password" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>



@endsection
