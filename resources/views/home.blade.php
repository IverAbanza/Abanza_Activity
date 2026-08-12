@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h2>Welcome to My Website</h2>

<x-card>

    <h3>Product Management System</h3>

    <p>
        This website demonstrates Laravel CRUD operations.
    </p>

    <br>

    <a
        href="{{ route('products.index') }}"
        class="button"
    >
        View Products
    </a>

</x-card>

@endsection