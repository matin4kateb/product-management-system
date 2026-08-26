@extends('layout')

@section('title', 'Edit Product')

@section('content')
<section class="card form-card">
    <p class="eyebrow">Catalog / {{ $product->sku }}</p>
    <h1>Edit product</h1>
    <p class="muted">Update the details for {{ $product->name }}.</p>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @method('PUT')
        @include('product._form', ['submitLabel' => 'Save changes'])
    </form>
</section>
@endsection
