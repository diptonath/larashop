@extends('backend.layouts.master') <!-- Extend your main backend layout -->

@section('content')
    <!-- Check if the product exists before displaying details -->
    @if ($product)
        <h1>{{ $product->title }}</h1>
        <p>{{ $product->summary }}</p>
        <div>{!! $product->description !!}</div>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Status:</strong> {{ ucfirst($product->status) }}</p>
        <p><strong>Condition:</strong> {{ ucfirst($product->condition) }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>
        <p><strong>Size:</strong> {{ $product->size }}</p>
        <p><strong>Featured:</strong> {{ $product->is_featured ? 'Yes' : 'No' }}</p>
    @else
        <p>Product not found.</p>
    @endif
@endsection
