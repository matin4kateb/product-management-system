@extends('layout')

@section('title', 'Contact us')

@section('content')
<section class="card">
    <p class="eyebrow">Support</p>
    <h1>Contact us</h1>
    <p class="muted">Have a question about your catalog? Our support team is happy to help.</p>
    <div class="form-grid">
        <div>
            <h2>Email</h2>
            <p><a href="mailto:support@example.com">support@example.com</a></p>
        </div>
        <div>
            <h2>Phone</h2>
            <p><a href="tel:+11234567890">+1 (123) 456-7890</a></p>
        </div>
    </div>
</section>
@endsection
