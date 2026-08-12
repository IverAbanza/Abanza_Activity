@extends('layouts.app')

@section('title', $product->name)

@section('content')

<h2>Product Details</h2>

<x-card>

    <h3>{{ $product->name }}</h3>

    <p>
        <strong>Price:</strong>
        ₱{{ number_format($product->price, 2) }}
    </p>

    <p>
        <strong>Description:</strong>
    </p>

    <p>
        {{ $product->description ?: 'No description available.' }}
    </p>

    <a
        href="{{ route('products.edit', $product) }}"
        class="button"
    >
        Edit Product
    </a>

    <a
        href="{{ route('products.index') }}"
        class="button"
    >
        Back
    </a>

</x-card>

@endsection