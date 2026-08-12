@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

<h2>Edit Product</h2>

<x-card>

    @if($errors->any())

        <div class="error">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form
        action="{{ route('products.update', $product) }}"
        method="POST"
    >

        @csrf

        @method('PUT')

        <label>
            Product Name
        </label>

        <input
            type="text"
            name="name"
            value="{{ old('name', $product->name) }}"
        >

        <label>
            Price
        </label>

        <input
            type="number"
            name="price"
            step="0.01"
            value="{{ old('price', $product->price) }}"
        >

        <label>
            Description
        </label>

        <textarea
            name="description"
            rows="5"
        >{{ old('description', $product->description) }}</textarea>

        <button type="submit" class="button">
            Update Product
        </button>

        <a
            href="{{ route('products.index') }}"
            class="button"
        >
            Cancel
        </a>

    </form>

</x-card>

@endsection