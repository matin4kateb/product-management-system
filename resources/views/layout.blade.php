<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    @include('layouts.header')

    <div class="app-shell">
        @include('layouts.sidebar')
        <main id="main-content" class="main-content" tabindex="-1">
            @if (session('status'))
                <div class="alert alert-success is-dismissible" role="status">
                    <span>{{ session('status') }}</span>
                    <button class="alert-close" type="button" aria-label="Dismiss notification">&times;</button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error is-dismissible" role="alert">
                    <div>
                        <strong>Please fix the following:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button class="alert-close" type="button" aria-label="Dismiss notification">&times;</button>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
    @vite('resources/js/app.js')
</body>
</html>
