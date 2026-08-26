@extends('layout')

@section('title', 'Add Product')

@section('content')
<section class="card form-card">
    <p class="eyebrow">Catalog</p>
    <h1>Add product</h1>
    <p class="muted">Create a listing for your inventory.</p>
    <form method="POST" action="{{ route('products.store') }}">
        @include('product._form', ['submitLabel' => 'Create product'])
    </form>
</section>
@endsection
