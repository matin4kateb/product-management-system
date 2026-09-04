@extends('layout')

@section('title', 'About us')

@section('content')
<section class="card">
    <p class="eyebrow">About the platform</p>
    <h1>Product management without the clutter.</h1>
    <p class="muted">Product Management System gives sellers a clear, reliable place to maintain their catalog and inventory.</p>
    <div class="form-grid">
        <div>
            <h2>Our mission</h2>
            <p>Make day-to-day product operations fast, predictable and easy to understand.</p>
        </div>
        <div>
            <h2>Our values</h2>
            <p>Clarity, ownership and useful defaults guide every part of the experience.</p>
        </div>
    </div>

    <div class="form-grid">
        <div>
            <h2>Open source</h2>
            <p>
                Product Management System is an open-source project. Its source code is available
                for learning, review, improvement and adaptation to your own workflow.
            </p>
        </div>
        <div>
            <h2>Built to evolve</h2>
            <p>
                The project is built with Laravel, PHP, Blade and modern frontend tools.
                Contributions, bug reports and practical ideas are welcome.
            </p>
        </div>
    </div>

    <div>
        <h2>How to contribute</h2>
        <p>
            You can help by reporting issues, suggesting improvements, improving the
            documentation or submitting a change that makes product management simpler.
            Please review the project documentation before getting started.
        </p>
    </div>
</section>
@endsection
