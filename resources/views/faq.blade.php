@extends('layout')

@section('title', 'FAQ')

@section('content')
<section class="card">
    <p class="eyebrow">Help center</p>
    <h1>Frequently asked questions</h1>
    <div class="form-grid">
        <div>
            <h2>How do I add a product?</h2>
            <p class="muted">Sign in, open Add product, complete the form and save. A unique SKU is generated automatically.</p>
        </div>
        <div>
            <h2>Can I edit my listings?</h2>
            <p class="muted">Yes. You can edit or delete products that belong to your account.</p>
        </div>
        <div>
            <h2>Can I search by SKU?</h2>
            <p class="muted">Yes. The product list supports searching by product name or SKU and filtering by category.</p>
        </div>
        <div>
            <h2>What happens when I delete a product?</h2>
            <p class="muted">Products are soft-deleted, so the record can be recovered later if that capability is added.</p>
        </div>
    </div>
</section>
@endsection
