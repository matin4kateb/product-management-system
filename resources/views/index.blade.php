@extends('layout')

@section('title', 'Product Manager')

@section('content')
<section class="card">
    <p class="eyebrow">Product operations</p>
    <h1>Manage your catalog with confidence.</h1>
    <p class="muted">A focused workspace for creating, searching and maintaining product listings.</p>
    <div class="form-actions">
        <a class="button button-primary" href="{{ route('products.index') }}">Browse products</a>
        @guest
            <a class="button button-secondary" href="{{ route('register') }}">Create an account</a>
        @else
            <a class="button button-secondary" href="{{ route('products.create') }}">Add a product</a>
        @endguest
    </div>
</section>

<section class="form-grid">
    <div class="card">
        <h2>Simple inventory</h2>
        <p class="muted">Keep names, pricing, categories and stock levels in one place.</p>
    </div>
    <div class="card">
        <h2>Built for teams</h2>
        <p class="muted">Each seller manages their own listings while the catalog stays searchable.</p>
    </div>
</section>
@endsection
