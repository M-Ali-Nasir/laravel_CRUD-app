<!-- resources/views/login.blade.php -->

@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
       
    </div>
</div>
<h2>Login</h2>
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>



@endsection
