@extends('layouts.app')

@section('title', 'Products')

@section('content')

<h2>Products</h2>

<a href="{{ route('products.create') }}" class="button">
    Add Product
</a>

<br><br>

@if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif

@if($products->count())

    @foreach($products as $product)

        <x-card>

            <h3>{{ $product->name }}</h3>

            <p>
                <strong>Price:</strong>
                ₱{{ number_format($product->price, 2) }}
            </p>

            <p>
                {{ $product->description }}
            </p>

            <a
                href="{{ route('products.show', $product) }}"
                class="button"
            >
                View
            </a>

            <a
                href="{{ route('products.edit', $product) }}"
                class="button"
            >
                Edit
            </a>

            <form
                action="{{ route('products.destroy', $product) }}"
                method="POST"
                style="display:inline;"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="button"
                    onclick="return confirm('Delete this product?')"
                >
                    Delete
                </button>

            </form>

        </x-card>

    @endforeach

@else

    <x-card>
        <p>No products available.</p>
    </x-card>

@endif

@endsection