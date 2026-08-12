@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

<h2>Add Product</h2>

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
        action="{{ route('products.store') }}"
        method="POST"
    >

        @csrf

        <label>
            Product Name
        </label>

        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
        >

        <label>
            Price
        </label>

        <input
            type="number"
            name="price"
            step="0.01"
            value="{{ old('price') }}"
        >

        <label>
            Description
        </label>

        <textarea
            name="description"
            rows="5"
        >{{ old('description') }}</textarea>

        <button type="submit" class="button">
            Save Product
        </button>

        <a href="{{ route('products.index') }}" class="button">
            Cancel
        </a>

    </form>

</x-card>

@endsection